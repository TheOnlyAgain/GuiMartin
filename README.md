 Glossaries for sections: Got global Glossary using CMTooltip Glossary.   
 Problem: -Cant setup several glossaries  
 -remove author from glossary entries  
 -glossary index not working  
 -fontcolor for glossary entries not readable on dark background  




 
 Resolved!! Setup Latex (via SimpleMathJax-but nor working, shortcode-problem)  
 Resolved Problem: Load amsmath for mathjax window.MathJax = {
  loader: {load: ['[tex]/ams']},  
  tex: {  
    inlineMath: [['$','$'], ['\\(','\\)']],  
    processEscapes: true,  
    packages: {'[+]': ['ams']}  
  }  
}; does the job in order to use ams, and cases in particular.  
