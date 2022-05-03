<?php

declare(strict_types=1);

namespace tgwaste\Mobs;

class Attributes {
	public function isFlying(string $name) : bool {
		return in_array($name, ["Bat", "Parrot", "Phantom", "Bee"]);
	}

	public function isJumping(string $name) : bool {
		return in_array($name, ["Rabbit", "Slime"]);
	}

	public function isSwimming(string $name) : bool {
		return in_array($name, ["Cod", "Dolphin", "ElderGuardian", "PufferFish", "Salmon", "Squid", "TropicalFish", "Axolotl"]);
	}

	public function isHostile(string $name) : bool {
		return in_array($name, [
			"Blaze", "CaveSpider", "Creeper", "Guardian", "Husk", "Skeleton", "Slime", "Spider", "Stray", "Witch", "Wolf", "Zombie", "ZombieVillager", "Evoker", "Vindicator", "ElderGuardian"
		]);
	}
	
	public function isNonHostile(string $name) : bool {
		return in_array($name, [
			"Cow", "Sheep", "Pig", "Fox", "Bee", "Rabbit", "Squid", "TropicalFish", "Horse", "Salmon", "Ocelot", "Parrot", "PufferFish", "Donkey", "Dolphin", "Cat", "Chicken", "Cod", "Bat", "Axolotl", "Goat"
		]);
	}
	
	//public function isNetherMob(string $name) : bool {
		//return in_array($name, ["Blaze", "Chicken", "Enderman", "Ghast", "MagmaCube", "Skeleton", "Slime"]);
	//}

	public function isSnowMob(string $name) : bool {
		return in_array($name, ["PolarBear"]);
	}

	public function canCatchFire(string $name) : bool {
		return in_array($name, ["Skeleton", "Zombie", "ZombieVillager", "Phantom"]);
	}

	public function getMortalEnemy(string $name) : string {
		$enemies = array("Skeleton" => "Wolf", "Wolf" => "Skeleton", "Zombie" => "Villager", "Fox" => "Chicken");
		foreach ($enemies as $source => $target) {
			if ($source === $name) {
				return $target;
			}
		}
		return "none";
	}
}
