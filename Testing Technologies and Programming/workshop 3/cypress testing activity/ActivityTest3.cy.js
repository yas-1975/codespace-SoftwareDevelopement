describe('Activity - Writing The First Tests 3 ', () => {
  it('Visits the examples page and completes various actions', () => {
    cy.visit('https://example.cypress.io/commands/actions')

    // Query for the action button with a class ".action-btn" and click on it.
    // Assert about the content on the page
    cy.get('.action-btn').click()
    cy.log('Clicked button')
   
    //Query for the element with an id "#action-canvas" and click on it.
    // Assert about the content on the page
    cy.get('#action-canvas').click()
    cy.log('Clicked on canvas')
   
    //Query for the element with an id "#action-canvas" and click on the "topLeft".
    // Assert about the content on the page
    cy.get('#action-canvas').click('topLeft')
    cy.log('Clicked on canvas top left')
    
    //Query for the element with an id "#action-canvas" and click on the "bottomRight".
    // Assert about the content on the page
    cy.get('#action-canvas').click('bottomRight')
    cy.log('Clicked on canvas bottom right')

  })
})