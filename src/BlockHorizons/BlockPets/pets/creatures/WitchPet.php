<?php

declare(strict_types = 1);

namespace BlockHorizons\BlockPets\pets\creatures;

use BlockHorizons\BlockPets\pets\WalkingPet;

class WitchPet extends WalkingPet {

	const NETWORK_ID = self::WITCH;

	public $height = 1.8;
	public $width = 0.72;

	public $name = "Witch Pet";
}