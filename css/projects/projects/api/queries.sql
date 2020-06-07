set heading off
select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -'
from dual;
select 'All customer data.' from dual;
select *
from customer
;

select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -'
from dual;
select 'All branch data.' from dual;
select *
from branch
;

select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -'
from dual;
select 'All account data.' from dual;
select *
from account
;

select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -'
from dual;
select 'All depositor data.' from dual;
select *
from depositor
;

select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -'
from dual;
select 'All loan data.' from dual;
select *
from loan
;

select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -'
from dual;
select 'All borrower data.' from dual;
select *
from borrower
;

select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -'
from dual;
select 'Names and cities of all borrowers' from dual;
select distinct customer.customer_name, customer_city
from borrower, customer
where borrower.customer_name = customer.customer_name
;

select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -'
from dual;
select 'Set of names and cities of customers who have a loan at Perryridge branch' from dual;
select distinct C.customer_name, customer_city
from customer C, borrower B, loan L
where C.customer_name = B.customer_name and
	B.loan_number = L.loan_number and
 	  branch_name = 'Perryridge'
;

select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -'
from dual;
select 'Numbers of accounts with balances between 700 and 900.'
from dual;
select account_number
from account
where balance between 700 and 900
;

select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -'
from dual;
select 'Names of customers on streets with names ending in "Hill".'
from dual;
select customer_name
from customer
where customer_street like '%Hill'
;

select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -'
from dual;
select 'Names of customers with both accounts and loans at Perryridge branch.'
from dual;
select distinct customer_name
from borrower, loan
where borrower.loan_number = loan.loan_number and
    branch_name = 'Perryridge' and
	customer_name in (select customer_name
				from account, depositor
				where account.account_number =
					depositor.account_number and
					   branch_name = 'Perryridge')
;

select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -'
from dual;
select 'Names of customers with an account but not a loan at Perryridge branch.'
from dual;
select distinct customer_name
from account, depositor
where account.account_number = depositor.account_number and
	branch_name = 'Perryridge' and
	customer_name not in (select customer_name
				from loan, borrower
				where loan.loan_number =
					borrower.loan_number and
					   branch_name = 'Perryridge')
;

select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -'
from dual;
select 'Names and cities of all borrowers.' from dual;
select distinct C.customer_name, customer_city
from borrower B, customer C
where B.customer_name = C.customer_name
;

select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -' from dual;
select 'Set of names of customers with accounts at a branch where Hayes has'
from dual;
select 'An account.' from dual;
select distinct D.customer_name
from depositor D, account A
where D.account_number = A.account_number and
    branch_name in
	(select branch_name
	from depositor Dh, account Ah
	where Dh.account_number = Ah.account_number and
	    D.customer_name = 'Hayes')
;

select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -'
from dual;
select 'Set of names of branches whose assets are greater than the assets of'
from dual;
select 'some branch in Brooklyn' from dual;
select distinct T.branch_name
from branch T, branch S
where T.assets > S.assets and
	S.branch_city = 'Brooklyn'
;

select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -'
from dual;
select 'Set of names of branches whose assets are greater than the assets of'
from dual;
select 'All branches in Brooklyn' from dual;
select branch_name
from branch
where assets > all
	(select assets
	from branch
	where branch_city = 'Brooklyn')
;

select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -'
from dual;
select 'Names of customers with both accounts and loans at Perryridge branch'
from dual;
select '(using "exists").' from dual;
select customer_name
from customer
where exists (select *
		from account, depositor
		where account.account_number = depositor.account_number and
			depositor.customer_name =
			customer.customer_name and
 			branch_name = 'Perryridge')
	and exists (select *
		from loan, borrower
 		where loan.loan_number = borrower.loan_number and
			borrower.customer_name =
			customer.customer_name and
 			branch_name = 'Perryridge')
;

select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -'
from dual;
select 'Names of customers with an account but not a loan at Perryridge branch'
from dual;
select '(using "exists").' from dual;
select customer_name
from customer
where exists (select *
		from account, depositor
		where account.account_number = depositor.account_number and
			depositor.customer_name = customer.customer_name and
			branch_name = 'Perryridge')
	and not exists (select *
		from loan, borrower
 		where loan.loan_number = borrower.loan_number and
			borrower.customer_name = customer.customer_name and
			branch_name = 'Perryridge')
;

select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -'
from dual;
select 'Set of names of customers at Perryridge branch, in alphabetical order.'
from dual;
select distinct customer_name
from borrower, loan, branch
where borrower.loan_number = loan.loan_number and
	loan.branch_name = 'Perryridge'
order by borrower.customer_name
;

select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -'
from dual;
select 'Loan data, ordered by decreasing amounts, then increasing loan numbers.'
from dual;
select *
from loan
order by amount desc, loan_number asc
;

select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -'
from dual;
select 'Names of branches having at least one account, with average account balances.'
from dual;
select branch_name, avg(balance)
from account
group by branch_name
;

select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -'
from dual;
select 'Names of branches having at least one account, with size of set of customers'
from dual;
select 'having at least one account at that branch.' from dual;
select branch_name, count(distinct customer_name)
from depositor, account
where depositor.account_number = account.account_number
group by branch_name
;

select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -'
from dual;
select 'The average balance of all accounts.' from dual;
select avg(balance)
from account
;

select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -'
from dual;
select 'Names of branches having at least one account, with average balances of'
from dual;
select 'Accounts at each branch, if that average is above 700.'
from dual;
select branch_name, avg(balance)
from account
group by branch_name
having avg(balance) > 700
;

select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -'
from dual;
select 'Name(s) of branch(es) having largest average balance.'
from dual;
select branch_name
from account
group by branch_name
having avg(balance) >= all(select avg(balance)
				from account
				group by branch_name)
;

select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -'
from dual;
select 'The number of customers.' from dual;
select count (*)
from customer
;

select '- - - - - - - - - - - - - - - - - - - - - - - - - - - -'
from dual;
select 'Average balance of all customers in Harrison having at least 2 accounts.'
from dual;
select avg(balance)
from depositor, account, customer
where depositor.customer_name = customer.customer_name and
	depositor.account_number = account.account_number and
	customer_city = 'Harrison'
group by depositor.customer_name
having count (distinct account.account_number) >= 2
;
