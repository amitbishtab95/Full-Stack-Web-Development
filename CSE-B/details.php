<?php
if (isset($_POST['btn']))
{
	echo "Dear,".$_POST['username'],"Your details are".'<br>';
echo $_POST['id'].'<br>';
echo $_POST['username'].'<br>';
echo $_POST['age'].'<br>';
echo $_POST['contact'].'<br>';
echo $_POST['email'].'<br>';

}
else
{
	echo "welcome guest";
}
?>