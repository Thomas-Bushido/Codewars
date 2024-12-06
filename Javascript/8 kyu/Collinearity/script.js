

// Theoretical Material

// You are given two vectors starting from the origin (x=0, y=0) with coordinates (x1,y1) 
// and (x2,y2). Your task is to find out if these vectors are collinear. Collinear vectors 
// are vectors that lie on the same straight line. They can be directed in the same or opposite directions. 
// One vector can be obtained from another by multiplying it by a certain number. In terms of coordinates, 
// vectors (x1, y1) and (x2, y2) are collinear if (x1, y1) = (k*x2, k*y2) , where k is any number acting as a coefficient.

// Problem Description
// Write the function collinearity(x1, y1, x2, y2), which returns a Boolean type depending on whether the vectors are collinear or not.
// all coordinates are integers
// -1000 <= any coordinate <= 1000

// Notes
// All vectors start from the origin (x=0, y=0).
// Be careful when handling cases where x1, x2, y1, or y2 are zero to avoid division by zero errors.
// A vector with coordinates (0, 0) is collinear to all vectors.

let x1= 0;
let y1= 1;
let x2= 7;
let y2= 1;
function collinearity( x1,y1, x2,y2 ) {


  
 const z1 = x1/x2;
  const z2 = y1/y2;
  const z3 = (x1*y2)-(y1*x2);
  
  if(z1 === z2){
    return true;
  } else if(x1 === 0 && x2 === 0 && y1 === 0 && y2 ===0){
    return true;
  } else if(z3 === 0){
    return true;
  } else{
    return false;
  } 
  

}