<?php
namespace App\Traits;

trait FormRequestHandlingTrait
{
    public function handleFormRequest(array $formRequest,object $object): bool
    {
        if ($object->create($formRequest)) {
            return true;
        }else {
            return false;
        }
    }

    public function destroyRecord(object $object) : bool {
        if (!is_null($object) || !empty($object)) {
            $object->delete();
            return true;
        }else {
            return false;
        }
    }

    public function updateRecord(array $formData,object $object,array|string $id = null): bool
    {
        if (isset($object)) {
            if ($object->update($formData)) {
                return true;
            }else {
                return false;
            }
        }else {
            return false;
        }
    }
}
