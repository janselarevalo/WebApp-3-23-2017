<html>
   <head>
      <title></title>
   </head>
<body>
  
   <?php
      
      $sub = array( array('subject' => 'Data Communications and Networking 1 (CISCO1)',
                     'catalog' => 'IT',
                     'code' => '211',
                     'grade' => 'A'),
            array('subject' => 'Data Communications and Networking 2 (CISCO2)',
                     'catalog' => 'IT',
                     'code' => '212',
                     'grade' => 'A+'),
            array('subject' => 'Philippine Literature',
                     'catalog' => 'ENGL',
                     'code' => '311',
                     'grade' => 'A+'),
            array('subject' => 'Technical, Scientific and Business English',
                     'catalog' => 'ENGL',
                     'code' => '301',
                     'grade' => 'A-'),
            array('subject' => 'IT Practicum (minimum of 486 hours)',
                     'catalog' => 'IT',
                     'code' => '421',
                     'grade' => 'A'),
            array('subject' => 'Computer System Org., Archtr. & Assembly Lang. Prog.',
                     'catalog' => 'CS',
                     'code' => '332',
                     'grade' => 'A-'),
            array('subject' => 'National Service Training Program 2',
                     'catalog' => 'NSTP',
                     'code' => '102',
                     'grade' => 'A'),
            array('subject' => 'Euthenics 2',
                     'catalog' => 'ETHNS',
                     'code' => '102',
                     'grade' => 'A'),  
            array('subject' => 'Application Lifecycle Management (HP) (Free Elective 1)',
                     'catalog' => 'CS',
                     'code' => '377',
                     'grade' => 'A'),
                                 
        );

         $json = json_encode($sub);
      
   ?>
   <script language = "javascript" type = "text/javascript">
      var arr = JSON.parse('<?php echo $json; ?>'); 

      arr.push({"subject" : "IT Capstone Project", "catalog" : "IT", "code" : "401", "grade" : "B-"});
      arr.push({"subject" : "Principles of Operating System and its Applications", "catalog" : "CS", "code" : "342", "grade" : "A"});
      arr.push();
      
      document.writeln("<table border='8' cellpadding='6'>");
      document.writeln("<tr><td>Subject</td><td>Subject Catalog</td><td>Subject Code</td></td><td>Grade</td></tr>")
      for(x = 0; arr.length > 0; x++){
         document.writeln("<tr>");
         document.writeln("<td>"+ arr[x].subject +"</td>");
         document.writeln("<td>"+ arr[x].catalog +"</td>");
         document.writeln("<td>"+ arr[x].code +"</td>");
         document.writeln("<td>"+ arr[x].grade +"</td>")
         document.writeln("</tr>")
       }
       document.writeln("</table>");

   </script>
</body>
</html>