<?php
namespace Lampart\Lib\Repositories\Room;

use App\Entities\RoomEntity;

class RoomRepositoryOptimize  {
	public function mmm(){
		echo 'mmmáda';
	}

    public static function all() {
        return collect([new RoomEntity()]);
    }
}
