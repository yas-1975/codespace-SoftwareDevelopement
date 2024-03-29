describe('Activity - Writing The First Tests 1', () => {
  it('Visits the Cypress.io example website and interacts with an element', () => {
    cy.visit('https://example.cypress.io')


  // Query for an element and interact with it
  cy.contains('get').should('exist').and('be.visible').click()
  cy.log('Clicked on get link')
    // Assert about the content on the page
  cy.url().should('include', '/commands/querying')

  // interact with the element

  cy.get('#query-btn').should('contain', 'Button').click()
  cy.log('Clicked button')
 
  })
})
