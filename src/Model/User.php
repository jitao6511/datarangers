<?php
namespace DataRangers\Model;

class User implements \JsonSerializable{
    private String $userUniqueId;

    private String $userUniqueIdType;

    /**
     * @return String
     */
    public function getUserUniqueId(): string
    {
        return $this->userUniqueId;
    }

    /**
     * @param String $userUniqueId
     */
    public function setUserUniqueId(string $userUniqueId): void
    {
        $this->userUniqueId = $userUniqueId;
    }


    /**
     * @return mixed
     */
    public function getUserUniqueIdType()
    {
        return $this->user_unique_id_type;
    }

    /**
     * @param mixed $user_unique_id
     */
    public function setUserUniqueIdType($user_unique_id_type): void
    {
         $this->user_unique_id_type = $user_unique_id_type;
    }

    public function jsonSerialize()
    {
        $data = [];
        if ($this->userUniqueId != null) $data["user_unique_id"] = $this->userUniqueId;
        return $data;
    }
}