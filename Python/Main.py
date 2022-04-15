from Account import Account
from Car import Car


def main():

    car = Car("WFR687", Account(name="Fredy Gonzales", document="FG123"))
    print(vars(car))
    print(vars(car.driver))


if __name__ == "__main__":
    main()