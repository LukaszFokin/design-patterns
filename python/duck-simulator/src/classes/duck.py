from abc import ABC, abstractmethod

from src.behavior.fly_behavior import FlyBehavior
from src.behavior.quack_behavior import QuackBehavior


class Duck(FlyBehavior, QuackBehavior):
    __metaclass__ = ABC

    __fly_behavior: FlyBehavior
    __quack_behavior: QuackBehavior

    @abstractmethod
    def display(self):
        pass

    def fly(self):
        self.__fly_behavior.fly()

    def quack(self):
        self.__quack_behavior.quack()

    def set_fly_behavior(self, fly_behavior: FlyBehavior):
        self.__fly_behavior = fly_behavior

    def set_quack_behavior(self, quack_behavior: QuackBehavior):
        self.__quack_behavior = quack_behavior
