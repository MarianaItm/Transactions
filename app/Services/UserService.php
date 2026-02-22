<?php

namespace App\Services;

use App\DTO\User as Transform;
use App\Models\User as Model;
use Exception;
use Illuminate\Support\Facades\Hash;

/**
 * Servicio que maneja todos los usuarios en el sistema
 *
 * @author Mariana Ortega Ortiz <marianaortegaortiz92@gmail.com>
 * @version 1.0
 */
class UserService
{
    /**
     * Actualiza un usuario en la base de datos
     *
     * @throws Exception
     */
    public function update(Transform $transform): Transform
    {
        $result = Model::find($transform->getId());
        if (is_null($result)) {
            throw new Exception(__('Ocurrió un error al obtener el usuario'));
        }

        $result->update($transform->toUpdate());

        return $transform;
    }

    /**
     * Obtiene un usuario por su id
     */
    public function findById(int $id): ?Transform
    {
        $result = Model::find($id);
        if (!is_null($result)) {
            return $this->transform($result);
        }

        return null;
    }

    /**
     * Obtiene la cuenta de usuario autenticada
     *
     * @return Transform
     * @throws Exception
     */
    public function getUserMe(): Transform
    {
        $user = auth()->user();
        if (is_null($user)) {
            throw new Exception(__('Ocurrió un error al obtener el usuario'));
        }

        return $this->transform($user);
    }

    /**
     * Verifica si un usuario ya existe en la base de datos
     * @param string $user
     * @return bool
     */
    private function exists(string $user): bool
    {
        return Model::where('name', $user)->exists();
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
        $self->setName($model['name']);
        $self->setEmail($model['email']);
        $self->setBalance($model['balance']);

        return $self;
    }
}
