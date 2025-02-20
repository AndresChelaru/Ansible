<?php
  if(isset($_POST['lamp'])) {
    $lampDomain = $_POST['lampDomain'];
    $lampMysqlRootPass = $_POST['lampMysqlRootPass'];

    $file = 'ansible/lamp.yml';
    $content = file_get_contents($file);

    $content = preg_replace('/mysqlRootPassword:\s*"(.*)"/','mysqlRootPassword: "'.$lampMysqlRootPass.'"',$content);
    $content = preg_replace('/lampDomain:\s*"(.*)"/','lampDomain: "'.$lampDomain.'"',$content);

    file_put_contents($file, $content);

    $command = 'ansible-playbook ansible/lamp.yml -u www-data --skip-tags "mysql-root"';
    $output = shell_exec($command);
    echo "<pre>$output</pre>";      
  }
?>