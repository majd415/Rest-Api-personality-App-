<?php
$path = '/home/drmouknm/public_html/app_zaid/app_zaid/test/perResult/المؤثر/';
$file_name = 'negativeAR.pdf';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file'])) {
        if (file_exists($path . $file_name)) {
            echo json_encode(['error' => 'File already exists']);
            exit();
        }

        $errors = [];
        $extensions = ['pdf'];

        $uploaded_file_name = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));

        if (!in_array($file_ext, $extensions)) {
            $errors[] = 'Extension not allowed: ' . $uploaded_file_name;
        }

        if (empty($errors)) {
            if (move_uploaded_file($file_tmp, $path . $file_name)) {
                echo json_encode(['success' => 'File uploaded successfully.']);
            } else {
                echo json_encode(['error' => 'Failed to move uploaded file.']);
            }
        } else {
            echo json_encode(['error' => implode("\n", $errors)]);
        }
    } else {
        echo json_encode(['error' => 'No file uploaded.']);
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (file_exists($path . $file_name)) {
        echo json_encode(['file_exists' => true, 'file_name' => $file_name]);
    } else {
        echo json_encode(['file_exists' => false]);
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    if (file_exists($path . $file_name)) {
        unlink($path . $file_name);
        echo json_encode(['success' => 'File deleted successfully.']);
    } else {
        echo json_encode(['error' => 'File not found.']);
    }
} else {
    echo json_encode(['error' => 'Invalid request method.']);
}
?>
