<?php

function format_folder_size($size)
{
 if ($size >= 1073741824)
 {
  $size = number_format($size / 1073741824, 2) . ' GB';
 }
    elseif ($size >= 1048576)
    {
        $size = number_format($size / 1048576, 2) . ' MB';
    }
    elseif ($size >= 1024)
    {
        $size = number_format($size / 1024, 2) . ' KB';
    }
    elseif ($size > 1)
    {
        $size = $size . ' bytes';
    }
    elseif ($size == 1)
    {
        $size = $size . ' byte';
    }
    else
    {
        $size = '0 bytes';
    }
 return $size;
}

function get_folder_size($folder_name)
{
 $total_size = 0;
 $file_data = scandir($folder_name);
 foreach($file_data as $file)
 {
  if($file === '.' or $file === '..')
  {
   continue;
  }
  else
  {
   $path = $folder_name . '/' . $file;
   $total_size = $total_size + filesize($path);
  }
 }
 return format_folder_size($total_size);
}


if(isset($_POST["action"]))
{
 if($_POST["action"] == "fetch")
 {
    if($_GET['ProName']){
        $ProName = $_GET['ProName'];
    }
    $directoryPath = 'Files Managment/'.$ProName.'/*';
  $folder = array_filter(glob($directoryPath), 'is_dir'); 
  
  $output = '
  <table class="table table-bordered table-striped">
   <tr>
    <th>Folder Name</th>
    <th>Total File</th>
    <th>Size</th>
    <th>Action</th>
   </tr>
   ';
  if(count($folder) > 0)
  {
   foreach($folder as $name)
   {
    $output .= '
     <tr>
      <td>'.$name.'</td>
      <td>'.(count(scandir($name)) - 2).'</td>
      <td>'.get_folder_size($name).'</td>
      <td>
       <!-- <button type="button" title="Update" name="update" style="margin:5px;" data-name="'.$name.'" class="update btn btn-warning btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i></button> -->
      <button type="button" title="Delete" name="delete" style="margin:5px;" data-name="'.$name.'" class="delete btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i></button>
      <button type="button" title="Upload" name="upload" style="margin:5px;" data-name="'.$name.'" class="upload btn btn-info btn-xs"><i class="fa fa-upload" aria-hidden="true"></i></button>
      <button type="button" title="View" name="view_files" style="margin:5px;" data-name="'.$name.'" class="view_files btn btn-success btn-xs"><i class="fa fa-file" aria-hidden="true"></i></button>
      <a href="filesys" style="margin:5px;" class="view_files btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i></a>
      </td>
     </tr>';
   }
  }
  else
  {
   $output .= '
    <tr>
     <td colspan="6">No Folder Found</td>
    </tr>
   ';
  }
  $output .= '</table>';
  echo $output;
 }
 


 if($_POST["action"] == "create")
 {
    $directoryPath = 'Files Managment/';
    if(!file_exists($directoryPath . $_POST["folder_name"])) 
    {
        mkdir($directoryPath . $_POST["folder_name"], 0777, true);
       // echo 'Folder Created';
    }
    else
    {
        echo 'Folder Already Created';
    }
 }



 if($_POST["action"] == "change")
 {
    if(!file_exists($_POST["folder_name"]))
    {
        rename($_POST["old_name"], $_POST["folder_name"]);
        // echo 'Folder Name Change';
    }
    else
    {
        echo 'Folder Already Created';
    }
 }


 
 if($_POST["action"] == "delete")
 {
    $files = scandir($_POST["folder_name"]);
    foreach($files as $file)
    {
        if($file === '.' or $file === '..')
        {
            continue;
        }
        else
        {
            unlink($_POST["folder_name"] . '/' . $file);
        }
    }

    if(rmdir($_POST["folder_name"]))
    {
        // echo 'Folder Deleted';
    }
 }



 
 if($_POST["action"] == "fetch_files")
 {
if($_POST["folder_name"]){
  $file_data = scandir($_POST["folder_name"]);
  $output = '
  <table class="table table-bordered table-striped">
   <tr>
    <th>File</th>
    <th>Name</th>
    <th>Action</th>
   </tr>
  ';
  
  foreach($file_data as $file)
  {
   if($file === '.' or $file === '..')
   {
    continue;
   }
   else
   {
    $path = $_POST["folder_name"] . '/' . $file;
    $output .= '
    <tr>
     <!--<td><img src="'.$path.'" class="img-thumbnail" height="50" width="50" /></td>-->
     <td><i class="fa fa-file" aria-hidden="true"></i></td>
     <td contenteditable="true" data-folder_name="'.$_POST["folder_name"].'"  data-file_name = "'.$file.'" class="change_file_name">'.$file.'</td>
     <td>
     <button name="remove_file" class="remove_file btn btn-danger btn-xs" style="margin:5px;" id="'.$path.'"><i class="fa fa-trash" aria-hidden="true"></i></button>
     <a href="'.$path.'" style="margin:5px;" class="view_files btn btn-success btn-xs"><i class="fa fa-download"></i></a>
     <a href="Viewdoc.php?Path='.$path.'" style="margin:5px;" class="view_files btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i></a>
     </td>
    </tr>
    ';
   }
  }
  $output .='</table>';
  echo $output;
 }
 


 if($_POST["action"] == "remove_file")
 {
  if(file_exists($_POST["path"]))
  {
   unlink($_POST["path"]);
//    echo 'File Deleted';
  }
 }
 



 if($_POST["action"] == "change_file_name")
 {
  $old_name = $_POST["folder_name"] . '/' . $_POST["old_file_name"];
  $new_name = $_POST["folder_name"] . '/' . $_POST["new_file_name"];
  if(rename($old_name, $new_name))
  {
//    echo 'File name change successfully';
  }
  else
  {
   echo 'There is an error';
  }
 }
}
}
?>
