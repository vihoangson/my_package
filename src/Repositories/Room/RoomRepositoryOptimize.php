<?php
namespace Lampart\Lib\Repositories\Room;

use App\Entities\RoomEntity;

class RoomRepositoryOptimize  {


    public static function all() {
        return collect([new RoomEntity()]);
    }
}
