# digitaltolk




- Missing SOLID principles no OPEN-CLOSE principle.
- Somes places are using hardcoded dependencies
- API responses are not following any standard pattern
- Error handling is not good
- Few things are not configurable and hardcoded in the code like the logger path
- Internationalizaing is not handled correctly
- The code is full of magic values
- Code breaks single responsibility pattern and weak separation of concerns
- Weak code documentation
- Few methods are too long and not broken down

The attached code requires a lot of refactoring out of which i have done as much to 
reduce alomst 500 line of codes from single file of more than 2000 lines of code.
This isn't a good practice to write all code in a single file even if there is irrelevant code.
there are still lots of emails sending directly from code which should be moved to event listener
for better code understandiblity and quality i have moved few of them for getting an understanding of my work.
I have also find some irrelivent methods written in the file which should be separated from it but due to lack of time 
I have done enough to get understanding of my work.

