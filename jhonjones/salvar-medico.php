<?php
switch($_REQUEST['acao']){
    case 'cadastrar':
        $nome = $_POST['nome_medico'];
        $crm = $_POST['crm_medico'];
        $especialidade = $_POST['especialidade_medico'];

        $sql = "INSERT INTO medico
                     (nome_medico,
                     crm_medico,
                     especialidade_medico)
                VALUE
                    ('{$nome}',
                    '{$crm}',
                    '{$especialidade}')";
        $res = $conn ->query($sql); 
        if($res==true){
            print"<script>alert('cadastro feito com sucesso!);</script>";
            print"<script>location.href='?page=cadastrar-medico';</script>";
        } else{
            print"<script>alert('cadastro nao sucessedido!);</script>";
            print"<script>location.href='?page=cadastrar-medico';</script>";
        }          
        break;
    case 'editar':
        //code...
        break;
    case 'excluir':
        //code...
        break;
}