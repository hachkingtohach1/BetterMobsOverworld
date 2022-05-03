<?php

declare(strict_types=1);

namespace tgwaste\Mobs\Entities;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\entity\{
    Human, Living
};
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\Item;
use pocketmine\player\Player;
use pocketmine\item\enchantment\Enchantment;
use function mt_rand;
use pocketmine\entity\EntitySizeInfo;
use pocketmine\network\mcpe\protocol\types\entity\EntityIds;
use pocketmine\item\ItemFactory;
use pocketmine\item\ItemIds;
use pocketmine\data\bedrock\EntityLegacyIds;

class Spider extends MobsEntity {
	const TYPE_ID = EntityLegacyIds::SPIDER;
	const HEIGHT = 0.9;
    public function initEntity(CompoundTag $nbt) : void{
        $this->setMaxHealth(20);
	 $this->setMovementSpeed(1.2);
        parent::initEntity($nbt);
    }
	
    public function getDrops(): array{
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
        $drops = [ItemFactory::getInstance()->get(ItemIds::STRING, 0, 1 * $lootingL)];
            if(mt_rand(0, 199) < 5){
                switch(mt_rand(0, 2)){
                    case 0:
                        $drops[] = ItemFactory::getInstance()->get(ItemIds::STRING, 0, 1 * $lootingL);
                        break;
                    case 1:
                        $drops[] = ItemFactory::getInstance()->get(ItemIds::STRING, 0, 1 * $lootingL);
                        break;
                    case 2:
                        $drops[] = ItemFactory::getInstance()->get(ItemIds::STRING, 0, 1 * $lootingL);
                        break;
                }
            }

        return $drops;
    }

    public function getXpDropAmount(): int
    {
        return 5 + mt_rand(1, 3);
    }
}
