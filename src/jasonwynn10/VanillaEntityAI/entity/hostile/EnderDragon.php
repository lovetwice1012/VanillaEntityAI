<?php
declare(strict_types=1);
namespace jasonwynn10\VanillaEntityAI\entity\hostile;

use pocketmine\entity\Monster;

class EnderDragon extends Monster {
	public const NETWORK_ID = self::ENDER_DRAGON;

	public $width = 2.5;
	public $height = 1.0;

	public function initEntity() : void {
		parent::initEntity(); // TODO: Change the autogenerated stub
	}

	/**
	 * @param int $tickDiff
	 *
	 * @return bool
	 */
	public function entityBaseTick(int $tickDiff = 1) : bool {
		return parent::entityBaseTick($tickDiff); // TODO: Change the autogenerated stub
	}

	/**
	 * @return array
	 */
	public function getDrops() : array {
		return parent::getDrops(); // TODO: Change the autogenerated stub
	}

	/**
	 * @return string
	 */
	public function getName() : string {
		return "Ender Dragon";
	}
}