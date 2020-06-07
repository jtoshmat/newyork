
class Calculator {
    constructor(previousElementText, currentElementText) {
        this.previousElementText = previousElementText;
        this.currentElementText = currentElementText;
        this.clear();
    }

    clear() {
        this.currentElementText = '';
        this.previousElementText = '';
        this.operation = undefined;

    }

    delete() {
        this.currentOperand = this.currentOperand.toString().slice(0, -1);


    }

    appendNumber(number) {
        if (number === '.' && this.currentOperand.includes('.')) return;
        this.currentOperand = this.currentElementText.toString() + number.toString();


    }

    chooseOperation(operation) {
        if (this.currentOperand === '') return;
        if (this.previousOperand !== '') {
            this.compute();
        }
        this.operation = operation;
        this.previousOperand = this.currentOperand;
        this.currentOperand = '';


    }

    compute() {
        let computation;
        const prev = parseFloat(this.previousOperand);
        const current = parseFloat(this.currentOperand);
        if (isNaN(prev) || isNaN(current)) return;
        switch (this.operation) {
            case '+':
                computation = prev + current;
                break;
            case '-':
                computation = prev - current;
                break;
            case '*':
                computation = prev * current;
                break;
            case '÷':
                computation = prev / current;
                break;
            default:
                return;
        }
        this.currentOperand = computation;
        this.operation = undefined;
        this.previousOperand = '';
    }
    getDisplayNumber(number) {
        const stringNumber = number.toString();
        const integerDigits = parseFloat(stringNumber.split('.')[0]);
        const decimalDigits = stringNumber.split('.')[1];
        let integerDisplay;
        if (isNaN(integerDigits)) {
            integerDisplay = '';
        } else {
            integerDisplay = integerDigits.toLocaleString('en', {
                maximumFractionDigits: 0 });
        }
        if (decimalDigits != null) {
            return '${integerDisplay}.$decimalDigits}';
        } else {
            return integerDisplay;
        }
    }

    updateDisplay() {
        this.currentElementText.innerText = this.getDisplayNumber(this.currentOperand);
        if (this.operation != null) {
            this.previousElementText.innerText = '${this.getDisplayNumber(this.previousOperand)} ${this.operation}';
        } else {
            this.previousElementText.innerText = '';

        }

    }

}

const numberButtons = document.querySelectorAll("[data-number]");
const numberButtonOne = document.querySelector("[data-number-one]");
const operatorButtons = document.querySelectorAll("data-operator");
const equalsButton = document.querySelector("data-equal");
const deleteButton = document.querySelector("data-backspace");
const allClearButton = document.querySelector("data-all-clear");
const previousElementText = document.querySelector("data-previous-op");
const currentElementText = document.querySelector("data-current-op");

const calculator = new Calculator(previousElementText, currentElementText);

numberButtons.forEach(button => {
    button.addEventListener('click', () => {
        calculator.appendNumber(button.innerText);
        calculator.updateDisplay();
    });
});
numberButtons.forEach(button => {
    button.addEventListener('click', () => {
        calculator.chooseOperation(button.innerText);
        calculator.updateDisplay();
    });
});

equalsButton.addEventListener('click', button => {
        calculator.compute();
        calculator.updateDisplay();
    });

    allClearButton.addEventListener('click', button => {
        calculator.compute();
        calculator.updateDisplay();
    });

    deleteButton.addEventListener('click', button => {
        calculator.compute();
        calculator.updateDisplay();
    });