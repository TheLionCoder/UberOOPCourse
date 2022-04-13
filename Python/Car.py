class Car:
    def __init__(self, id, license, driver, passenger ) -> None:
        self.id = int(id)
        self.license = license
        self.driver = driver
        self.passenger = int(passenger)