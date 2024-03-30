describe('Test Calculator - Percentage', () => {
  beforeEach(() => {
    // Visit HTML file
    cy.visit('index.html');
  });


  // calculate the value of 1%  and checks the result
  it('calculate one percent', () => {

    // Click the 'one' button
    cy.get('[data-cy="one"]').click();
    
    // Click the 'x' button
    cy.get('[data-cy="multiply"]').click();
    
    // Click the 'one' button
    cy.get('[data-cy="one"]').click();
    
    // Click the '%' button
    cy.get('[data-cy="percent"]').click();

    // Click the '=' button
    cy.get('[data-cy="equals"]').click();

    // Check that the output is '0.01' (result of 1% of 1)
    cy.get('[data-cy="output"]').should('have.value', '0.01');
  });


  
  // calculate the value of 2% and checks the result
  it('calculate two percent', () => {
    
  
    // Click the 'two' button
    cy.get('[data-cy="two"]').click();
    
    // Click the 'x' button
    cy.get('[data-cy="multiply"]').click();
    
    // Click the 'two' button
    cy.get('[data-cy="two"]').click();
    
    // Click the '%' button
    cy.get('[data-cy="percent"]').click();

    // Click the '=' button
    cy.get('[data-cy="equals"]').click();
    
    // Check that the output is '0.02' (result of 2%)
    cy.get('[data-cy="output"]').should('have.value', '0.02');
  });


  // calculate the value of 3%
  it('calculate three percent', () => {
    
    // Click the 'one' button
    cy.get('[data-cy="three"]').click();
    
    // Click the 'x' button
    cy.get('[data-cy="multiply"]').click();
    
    // Click the 'three' button
    cy.get('[data-cy="three"]').click();
    
    // Click the '%' button
    cy.get('[data-cy="percent"]').click();

    // Click the '=' button
    cy.get('[data-cy="equals"]').click();
    
    // Check that the output is '0.03' (result of 3%)
    cy.get('[data-cy="output"]').should('have.value', '0.03');
  });

});