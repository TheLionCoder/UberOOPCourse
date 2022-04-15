class Main {
    public static void main(String[] args) {
        UberX uberX = new UberX("WNQ875", new Account("Fredy Gomez", "FG123"), "Mazda", "323");
        uberX.setPassenger(4);
        uberX.printDataCar();
    }
}