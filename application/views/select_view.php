<html xmlns="http://www.w3.org/1999/xhtml">  
   <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
      <title>Untitled Document</title>  
   </head>  
   <table border="1">  
      <tbody>  
         <tr>  
            <td>sid</td>  
            <td>fname</td>
            <td>lname</td>
            <td>email</td>
            <td>faculty</td> 
            <td>password</td> 
         </tr>  
         <?php  
         foreach ($h->result() as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->sid;?></td>  
            <td><?php echo $row->fname;?></td>
            <td><?php echo $row->lname;?></td>  
            <td><?php echo $row->email;?></td>
            <td><?php echo $row->faculty;?></td>  
            <td><?php echo $row->password;?></td>  
            </tr>  
         <?php }  
         ?>  
      </tbody>  
   </table>  
<body>  
</body>  
</html> 