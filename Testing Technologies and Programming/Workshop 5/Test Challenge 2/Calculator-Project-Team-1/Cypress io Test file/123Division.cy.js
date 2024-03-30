describe('Test Calculator - Division', () => {
  beforeEach(() => {
    // Visit HTML file
    cy.visit('index.html');
  });


  // calculate the value of 1 / 2 and checks the result
  it('divides number one by two', () => {

    // Click the 'one' button
    cy.get('[data-cy="one"]').click();
    
    // Click the '/' button
    cy.get('[data-cy="divide"]').click();
    
    // Click the 'two' button
    cy.get('[data-cy="two"]').click();
    
    // Click the '=' button
    cy.get('[data-cy="equals"]').click();
    
    // Check that the output is '0.5' (result of 1 / 2)
    cy.get('[data-cy="output"]').should('have.value', '0.5');
  });


  
  // calculate the value of 2 / 3 and checks the result
  it('divides numbers two by three', () => {
    
    // Click the 'two' button
    cy.get('[data-cy="two"]').click();
    
    // Click the '/' button
    cy.get('[data-cy="divide"]').click();
    
    // Click the 'three' button
    cy.get('[data-cy="three"]').click();
    
    // Click the '=' button
    cy.get('[data-cy="equals"]').click();
    
    // Check that the output is '0.6666666666666666' (result of 2 / 3)
    cy.get('[data-cy="output"]').should('have.value', '0.6666666666666666');
  });

  // calculate the value of 1 / 3 and checks the result
  it('divide numbers one by three', () => {
    
    // Click the 'one' button
    cy.get('[data-cy="one"]').click();
    
    // Click the 'multiply' button
    cy.get('[data-cy="divide"]').click();
    
    // Click the 'three' button
    cy.get('[data-cy="three"]').click();
    
    // Click the '=' button
    cy.get('[data-cy="equals"]').click();
    
    // Check that the output is '3' (result of 1 / 3)
    cy.get('[data-cy="output"]').should('have.value', '0.3333333333333333');
  });


  // calculate the value of 2 / 1 and checks the result
  it('divides number two by one', () => {

    // Click the 'two' button
    cy.get('[data-cy="two"]').click();
    
    // Click the '/' button
    cy.get('[data-cy="divide"]').click();
    
    // Click the 'one' button
    cy.get('[data-cy="one"]').click();
    
    // Click the '=' button
    cy.get('[data-cy="equals"]').click();
    
    // Check that the output is '1' (result of 2 / 1)
    cy.get('[data-cy="output"]').should('have.value', '2');
  });

  // calculate the value of 3 / 2 and checks the result
  it('divides numbers three by two', () => {
    
    // Click the 'three' button
    cy.get('[data-cy="three"]').click();
    
    // Click the '/' button
    cy.get('[data-cy="divide"]').click();
    
    // Click the 'two' button
    cy.get('[data-cy="two"]').click();
    
    // Click the '=' button
    cy.get('[data-cy="equals"]').click();
    
    // Check that the output is '0.6666666666666666' (result of 3 / 2)
    cy.get('[data-cy="output"]').should('have.value', '1.5');
  });

  // calculate the value of 3 / 1 and checks the result
  it('divide numbers three by one', () => {
    
    // Click the 'one' button
    cy.get('[data-cy="three"]').click();
    
    // Click the 'multiply' button
    cy.get('[data-cy="divide"]').click();
    
    // Click the 'three' button
    cy.get('[data-cy="one"]').click();
    
    // Click the '=' button
    cy.get('[data-cy="equals"]').click();
    
    // Check that the output is '3' (result of 3 / 1)
    cy.get('[data-cy="output"]').should('have.value', '3');
  });


});