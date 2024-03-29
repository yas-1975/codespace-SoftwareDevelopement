describe('Activity - Writing The First Tests 2 ', () => {
  it('Visits the examples page and inserts an email', () => {
    cy.visit('https://example.cypress.io')

    //Query for the Type element and clicks

    cy.contains('type').should('exist').and('be.visible').click()
    cy.log('Clicked on get link')

    // Assert about the content on the page
    cy.url().should('include', '/commands/actions')

    //Type the email address
    // Assert aabout the content of the input field
    cy.get('.action-email')
    .type('fake@email.com').should('have.value', 'fake@email.com')
    cy.log('email updated')


  })
})
