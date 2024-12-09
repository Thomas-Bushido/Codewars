// Vowel Count

// Return the number (count) of vowels in the given string.

// We will consider a, e, i, o, u as vowels for this Kata (but not y).

// The input string will only consist of lower case letters and/or spaces.

function getCount(str) {
  
    const vowels = ['a','e','i','o','u'];
     
    let count = 0;
    for(let i=0; i<=str.length-1;i++){
      for(let j=0; j<= vowels.length-1;j++){
      
        if(str[i] === vowels[j]){
          console.log("Found the letter ", str[i], " at the position", i, "and it is a wovel!")
            count++
            
          }
        
        
        
      }
    }
    
    return count;
  }