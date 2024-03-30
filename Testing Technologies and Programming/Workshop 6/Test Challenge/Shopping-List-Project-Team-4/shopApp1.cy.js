describe('Shopping App', () => {
  beforeEach(() => {
    cy.visit('body.html') 
  })

  it('should add an item to the list', () => {
    const newItem = 'Test Shopping Item'

    // Type a new item into the input field
    cy.get('[data-cy=input]').type(newItem)

    // Click the add button
    cy.get('[data-cy=btn]').click()

    // Check if the new item is added to the list
    cy.get('[data-cy=itemList]').contains(newItem)
  })


  it('should mark item as completed with a line-through when checkbox is checked', () => {
    const newItem = 'Apples';

    // Type a new item into the input field
    cy.get('[data-cy=input]').type(newItem);

    // Click the add button
    cy.get('[data-cy=btn]').click();

    // Find the added item and verify it's not completed initially
    cy.get('[data-cy=itemList]').contains(newItem).should('not.have.class', 'completed');

    // Find the checkbox associated with the added item and check it
    cy.get('[data-cy=itemList]').contains(newItem).siblings('input[type="checkbox"]').check();

    // Verify the checkbox is checked
    cy.get('[data-cy=itemList]').contains(newItem).siblings('input[type="checkbox"]').should('be.checked');

  });
});