namespace PalkiaDude\PVPAddon;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
class Main extends PluginBase implements Listener{

public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->info(TextFormat::GREEN . "SUPER POWAS ACTIVATED!!");
}
public function Hurt(EntityDamageByEntityEvent $event){
$killer = $event->getDamager();
$Victim = $event->getEntity();
if($killer->getItem()->getId() == 276 or 267){
$event->$killer->setHealth(1);
$event->$Victim->setOnFire(5);
}
}
}
