<?
  error_reporting(E_ALL);
  if (!$_POST[subject])
  {
    echo("
    <script>
    alert('Please write subject');
    history.go(-1);
    </script>
    ");
    exit;
  }
  if (!$_POST[content])
  {
    echo("
    <script>
    alert('Please write content');
    history.go(-1);
    </script>
    ");
    exit;
  }
  $subject = str_replace(' ','_',$_POST['subject']);
  $file_name = date("Y-m-d-H-i").'_'.$subject.'.md';
  echo $file_name;
  $fh = fopen('posts/'.$file_name, 'w');

  //$content = $_POST['content'];
  $content = str_replace("\r\n","\n", $_POST['content']);  

  fwrite($fh, '#'.$_POST['subject']."\n\n".$content);
  fclose($fh);

  Header("Location:index");
?>
