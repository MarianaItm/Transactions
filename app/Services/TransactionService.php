<?php

namespace App\Services;

use App\DTO\Transaction as Transform;
use App\Models\Transaction as Model;
use Exception;

/**
 * Servicio que maneja todas las transacciones en el sistema
 *
 * @author Mariana Ortega Ortiz <marianaortegaortiz92@gmail.com>
 * @version 1.0
 */
class TransactionService
{
    /**
     * Registra un usuario en la base de datos
     * @param Transform $data
     * @return Transform
     */
    public function create(Transform $data): Transform
    {
        $result = Model::create($data->toCreate());
        $data->setId($result->id);

        return $data;
    }

    /**
     * Actualiza una transacción en la base de datos
     * @param Transform $transform
     * @return Transform
     * @throws Exception
     */
    public function update(Transform $transform): Transform
    {
        $result = Model::find($transform->getId());
        if (is_null($result)) {
            throw new Exception(__('Ocurrió un error al obtener la transacción'));
        }

        $result->update($transform->toUpdate());

        return $transform;
    }

    /**
     * Obtiene una transacción por su id
     * @param string $id
     * @return Transform|null
     */
    public function findByTransaction(string $id): ?Transform
    {
        $result = Model::where('transaction_id', $id)->first();
        if (!is_null($result)) {
            return $this->transform($result);
        }

        return null;
    }

    /**
     * Obtiene las transacciones de un usuario
     * @param int $id
     * @return array<Transform>
     */
    public function findByUser(int $id): array
    {
        $result = Model::where('user_id', $id)
            ->orderBy('created_at', 'desc')
            ->get();

        $results = [];
        foreach ($result as $item) {
            $results[] = $this->transform($item);
        }

        return $results;
    }

    /**
     * Transforma un modelo a un DTO
     * @param Model $model
     * @return Transform
     */
    private function transform(Model $model): Transform
    {
        $self = new Transform();
        $self->setId($model['id']);
        $self->setTransactionId($model['transaction_id']);
        $self->setStatus($model['status']);
        $self->setAmount($model['amount']);
        $self->setUserId($model['user_id']);
        $self->setCreatedAt($model['created_at']);

        return $self;
    }
}
