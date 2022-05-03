<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\data\bedrock\EntityLegacyIds;

class Goat extends MobsEntity {

	const HEIGHT = 1.6;
	
	public static function getNetworkTypeId() : string
	{
        return "minecraft:goat";
	}
	
    public function initEntity(CompoundTag $nbt) : void{
        $this->setMaxHealth(10);
	 $this->setMovementSpeed(1); 
        parent::initEntity($nbt);
    }
    /**public function getDrops(): array
    {
    
    
        $lootingL = 1;
        $cause = $this->lastDamageCause;
        if($cause instanceof EntityDamageByEntityEvent){
            $dmg = $cause->getDamager();
            if($dmg instanceof Player){
              
                // $looting = $dmg->getInventory()->getItemInHand()->getEnchantment(Enchantment::LOOTING);
                // if($looting !== null){
                    // $lootingL = $looting->getLevel();
                // }else{
                    $lootingL = 1;
            // }
            }
        }
        return $drops = [
            VanillaItems::EMERALD()->setCount(mt_rand(0, 1 * $lootingL)),
        ];
    }
*/
    public function getXpDropAmount(): int
    {
        return mt_rand(1, 3);
    }
}



