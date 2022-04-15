class UberBlack extends Car {
    constructor(license, driver, typeCarAccepted, seatsMaterial){
        super(license, driver, typeCarAccepted, seatsMaterial)
        this.typeCarAccepter = typeCarAccepter;
        this.seatsMaterial = seatsMaterial;
    }
}