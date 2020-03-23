<?php


namespace MyItEducation;


class LearningCenter
{
    public function aboutCourse()
    {
        echo "<hr>STEP-1: Welcome to My-IT-Education course<hr>";
        $result = $this->courseProgramm();
        if ($result['error']) {
            return [
                'error' => false,
                'code' => 200,
                'msg' => $result['msg']
            ];
        } else {
            return [
                'error' => true,
                'code' => 500,
                'msg' => $result['msg']
            ];
        }
    }

    public function courseProgramm()
    {
        echo "STEP-2: We learn PHP, SQL, JAVA, Java Script, Laravel, CSS, HTML, Python<hr>";
        $result = $this->coursePeriod();
        if ($result['error']) {
            return [
                'error' => false,
                'code' => 200,
                'msg' => $result['msg']
            ];
        } else {
            return [
                'error' => true,
                'code' => 500,
                'msg' => $result['msg']
            ];
        }
    }

    public function coursePeriod()
    {
        echo "STEP-3: Our course continied 6-8 month<hr>";

        $result = $this->exams();
        if ($result['error']) {
            return [
                'error' => false,
                'code' => 200,
                'msg' => $result['msg']
            ];
        } else {
            return [
                'error' => true,
                'code' => 500,
                'msg' => $result['msg']
            ];
        }
    }

    public function exams()
    {
        echo "STEP-4: We will help you take HIPAA, ZEND, AWS, GOOGLE certification<hr>";
        $result = $this->prepareForJob();
        if ($result['error']) {
            return [
                'error' => false,
                'code' => 200,
                'msg' => $result['msg']
            ];
        } else {
            return [
                'error' => true,
                'code' => 500,
                'msg' => $result['msg']
            ];
        }
    }

    public function prepareForJob()
    {
        echo "STEP-5: We will help build your website, resume and your portfollio<hr>";
        $result = $this->interviewForJob();
        if ($result['error']) {
            return [
                'error' => false,
                'code' => 200,
                'msg' => $result['msg']
            ];
        } else {
            return [
                'error' => true,
                'code' => 500,
                'msg' => $result['msg']
            ];
        }
    }

    public function interviewForJob()
    {
        echo "STEP-6: We help find job and pass interiew job<hr>";
        $result = $this->finallyOfCourse();
        if ($result['error']) {
            return [
                'error' => false,
                'code' => 200,
                'msg' => $result['msg']
            ];
        } else {
            return [
                'error' => true,
                'code' => 500,
                'msg' => $result['msg']
            ];
        }
    }

    public function finallyOfCourse()
    {
        echo "STEP-7: Good luck in your carrer<hr>";
        return [
            'error' => false,
            'code' => 500,
            'msg' => 'Error: Unfortunately, you failed to complete our course.'
            //'msg' => 'Succes: Congratulation. Good luck.'
        ];
    }
}