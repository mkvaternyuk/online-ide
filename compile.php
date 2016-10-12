<?php
$sourcePath = '/home/max/sites/online-ide/progs/java/JavaApplication1/src/javaapplication1/';
$fname = 'JavaApplication1.java';


$commnad = 'javac '.$sourcePath.$fname;

list($return_code, $stdout, $stderr) = pipe_exec($commnad);

echo "<pre>";
print_r($return_code);
echo "\n";
print_r($stdout);
echo "\n";
print_r($stderr);


function pipe_exec($cmd, $input='') {
    $proc = proc_open($cmd, array(array('pipe', 'r'),
        array('pipe', 'w'),
        array('pipe', 'w')), $pipes);
    fwrite($pipes[0], $input);
    fclose($pipes[0]);

    $stdout = stream_get_contents($pipes[1]);
    fclose($pipes[1]);

    $stderr = stream_get_contents($pipes[2]);
    fclose($pipes[2]);

    $return_code = (int)proc_close($proc);

    return array($return_code, $stdout, $stderr);
}