class Account:
    def __init__(self,id, name, document, email, password):
        self.id = int(id)
        self.name = name
        self.document = document
        self.email = email
        self.password = password