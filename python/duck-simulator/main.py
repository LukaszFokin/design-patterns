from src.classes.mallard_duck import MallardDuck
from src.classes.fly.fly_no_way import FlyNoWay
from src.classes.fly.fly_with_wings import FlyWithWings
from src.classes.quack.quack import Quack
from src.classes.quack.sneak import Sneak

d = MallardDuck()

d.set_quack_behavior(Sneak())
d.set_fly_behavior(FlyNoWay())

d.display()
d.quack()
d.fly()