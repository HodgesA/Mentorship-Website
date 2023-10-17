// Abstract invoice interface
class Invoice {
    constructor() {
      if (new.target === Invoice) {
        throw new Error('Cannot instantiate abstract class.');
      }
    }
  
    // Abstract methods
    generateInvoice() {
      throw new Error('Method not implemented.');
    }
  
    printInvoice() {
      throw new Error('Method not implemented.');
    }
  }
  
  // Concrete implementation of the invoice
  class ConcreteInvoice extends Invoice {
    constructor(customer, items) {
      super();
      this.customer = customer;
      this.items = items;
    }
  
    generateInvoice() {
      // Implement the logic to generate the invoice
      // using the customer and item details
      // ...
      console.log('Invoice generated successfully.');
    }
  
    printInvoice() {
      // Implement the logic to print the invoice
      // ...
      console.log('Invoice printed successfully.');
    }
  }
  
  // Usage of the 'invoice' module
  const invoice = new ConcreteInvoice('John Doe', ['Item 1', 'Item 2']);
  invoice.generateInvoice(); // Invoke the concrete implementation
  invoice.printInvoice(); // Invoke the concrete implementation
  