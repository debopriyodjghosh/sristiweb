<?php
include_once 'header.php';
?>
<?php
// Include the database configuration file
include 'db.php';
$statusMsg = '';

// File upload path
$targetDir = "upload_file/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
//echo $targetFilePath;
//echo $fileName;
//echo $targetDir;
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('doc','docx','txt','pdf');
	$date = $_POST['date'];
	$subject = $_POST['subject'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$mail = $_POST['mail'];
	$issue = $_POST['issue'];
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
			echo $targetFilePath;
            $insert = $conn->query("INSERT into document (file_name, uploaded_on, date, subject, name, phone, mail, issue) VALUES ('".$fileName."', NOW(), '".$date."', '".$subject."', '".$name."', '".$phone."', '".$mail."', '".$issue."')");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only doc, docx, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>
<?php
include_once 'footer.php';
?>
