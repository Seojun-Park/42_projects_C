<?php
function pwChecker($obj, $id, $old, $new)
{
    foreach ($obj as $key => $val) {
        if ($val['passwd'] == $old && $val['login'] == $id)
            return $key;
    }
    return false;
}

if (isset($_POST['login']) && isset($_POST['newpw']) && isset($_POST['oldpw']) && $_POST['submit'] === "OK") {
    $obj = unserialize(file_get_contents('../private/passwd'));
    $key = pwChecker($obj, $_POST['login'], $_POST['oldpw'], $_POST['newpw']);
    $obj[$key]['passwd'] = $_POST['newpw'];
    echo "OK\n";
    sleep(2);
    // header("Location: 'http://localhost:8080/D04/ex04/index.html'");
    echo "<meta http-equiv='refresh' content='0;url=index.html'>";

} else {
    echo "ERROR\n";
}
