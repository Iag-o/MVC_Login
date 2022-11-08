<?php

namespace App\DAO;

use App\Model\PessoaModel;
use \PDO;

class PessoaDAO extends DAO
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert(PessoaModel $model)
    {
        $sql = "ISERT INTO pessoa (nome, cpf, data_nascimento) VALUES (?, ?, ?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindvalue(2, $model->cpf);
        $stmt->bindvalue(3, $model->data_nascimento);
    }
}