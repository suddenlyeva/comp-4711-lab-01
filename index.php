<!DOCTYPE html>
<html>
  <head><title>Lab 01</title></head>
  <body>
    <?php
      include('student.php');

      $students = array();

      $first = new Student();
      $first->surname = "Doe";
      $first->first_name = "John";
      $first->add_email('home','john@doe.com');
      $first->add_email('work','jdoe@mcdonalds.com');
      $first->add_grade(65);
      $first->add_grade(75);
      $first->add_grade(55);
      $students['j123'] = $first;

      $second = new Student();
      $second->surname = "Einstein";
      $second->first_name = "Albert";
      $second->add_email('home','albert@braniacs.com');
      $second->add_email('work1','a_einstein@bcit.ca');
      $second->add_email('work2','albert@physics.mit.edu');
      $second->add_grade(95);
      $second->add_grade(80);
      $second->add_grade(50);
      $students['a456'] = $second;

      $me = new Student();
      $me->surname = "Wong";
      $me->first_name = "Eva";
      $me->add_email('bcit', 'awong512@my.bcit.ca');
      $me->add_email('personal', 'suddenlyeva@gmail.com');
      $me->add_grade(100);
      $me->add_grade(95);
      $me->add_grade(90);
      $students['e789'] = $me;

      foreach($students as $student)
        echo $student->toString();

    ?>
  </body>
</html>