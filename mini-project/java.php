<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JAVA</title>
    <link rel="stylesheet" href="c++.css">
</head>
<body>
<h1 class="welcome"> welcome to training and placement</h1>
<hr>
<div class="nav-bar">
   <div class="dropdown">
    <div class="menu">
        <button class="dropbtn">
            menu
        </button>
        <div class="dropdown-content">
            <a href="student_index.php">home</a>
            <a href="profile.php">profile</a>
            <a href="training.php">training</a>
            <a href="#">company</a>
            <a href="#">company applied </a>
            <a href="https://www.overleaf.com/latex/templates/indian-institute-of-technology-bombay-resume/fgnpzhygqxrq">create your resume</a>
            <a href="index.php">logout</a>
        </div>
    </div>
    </div>
    <div class="name">
       
        <?php
        echo $_SESSION['NAME'];
        ?>
    </div>
   
</div>
   <h1 class="h1">Java Tutorial</h1>
<p>Our core Java programming tutorial is designed for students and working professionals. Java is an <a href="java-oops-concepts">object-oriented</a>, class-based, concurrent, secured and general-purpose computer-programming language. It is a widely used robust technology. </p>
<h2 id="what-is-java" class="h2">What is Java?</h2>
<p>Java is a <strong>programming language</strong> and a <strong>platform</strong>. Java is a high level, robust, object-oriented and secure programming language.</p>
<p>Java was developed by <em>Sun Microsystems</em> (which is now the subsidiary of Oracle) in the year 1995. <em>James Gosling</em> is known as the father of Java. Before Java, its name was <em>Oak</em>. Since Oak was already a registered company, so James Gosling and his team changed the name from Oak to Java.</p>
<p><strong>Platform</strong>: Any hardware or software environment in which a program runs, is known as a platform. Since Java has a runtime environment (JRE) and API, it is called a platform.</p>
<h2 id="java-example" class="h2">Java Example</h2>
<p>Let's have a quick look at Java programming example. A detailed description of Hello Java example is available in next page.</p>
<p><strong>Simple.java</strong></p>
<div class="codeblock"><textarea name="code" class="java">
class Simple{
    public static void main(String args[]){
     System.out.println("Hello Java");
    }
}
</textarea></div>
<span class="testit"><a href="https://compiler.javatpoint.com/opr/test.jsp?filename=Simple" target="_blank">Test it Now</a></span>
<h2 id="wjiu" class="h2">Application</h2>
<p>According to Sun, 3 billion devices run Java. There are many devices where Java is currently used. Some of them are as follows:</p>
<ol class="points">
<li>Desktop Applications such as acrobat reader, media player, antivirus, etc.</li>
<li>Web Applications such as irctc.co.in, javatpoint.com, etc.</li>
<li>Enterprise Applications such as banking applications.</li>
<li>Mobile</li>
<li>Embedded System</li>
<li>Smart Card</li>
<li>Robotics</li>
<li>Games, etc.</li>
</ol>
<h2 id="java-applications" class="h2">Types of Java Applications</h2>
<p>There are mainly 4 types of applications that can be created using Java programming:</p>
<h4 class="h4">1) Standalone Application</h4>
<p>Standalone applications are also known as desktop applications or window-based applications. These are traditional software that we need to install on every machine. Examples of standalone application are Media player, antivirus, etc. AWT and Swing are used in Java for creating standalone applications.</p>
<h4 class="h4">2) Web Application</h4>
<p>An application that runs on the server side and creates a dynamic page is called a web application. Currently, <a href="servlet-tutorial">Servlet</a>, <a href="jsp-tutorial">JSP</a>, <a href="struts-2-tutorial">Struts</a>, <a href="spring-tutorial">Spring</a>, <a href="hibernate-tutorial">Hibernate</a>, <a href="jsf-tutorial">JSF</a>, etc. technologies are used for creating web applications in Java.</p>
<h4 class="h4">3) Enterprise Application</h4>
<p>An application that is distributed in nature, such as banking applications, etc. is called an enterprise application. It has advantages like high-level security, load balancing, and clustering. In Java, <a href="https://www.javatpoint.com/ejb-tutorial">EJB</a> is used for creating enterprise applications.</p>
<h4 class="h4">4) Mobile Application</h4>
<p>An application which is created for mobile devices is called a mobile application. Currently, Android and Java ME are used for creating mobile applications.</p>
<h2 id="java-platforms" class="h2">Java Platforms / Editions</h2>
<p>There are 4 platforms or editions of Java:</p>
<h4 class="h4">1) Java SE (Java Standard Edition)</h4>
<p>It is a Java programming platform. It includes Java programming APIs such as java.lang, java.io, java.net, java.util, java.sql, java.math etc. It includes core topics like OOPs, <a href="java-string">String</a>, Regex, Exception, Inner classes, Multithreading, I/O Stream, Networking, AWT, Swing, Reflection, Collection, etc.</p>
<h4 class="h4">2) Java EE (Java Enterprise Edition)</h4>
<p>It is an enterprise platform that is mainly used to develop web and enterprise applications. It is built on top of the Java SE platform. It includes topics like Servlet, JSP, Web Services, EJB, <a href="https://www.javatpoint.com/jpa-tutorial">JPA</a>, etc.</p>
<h4 class="h4">3) Java ME (Java Micro Edition)</h4>
<p>It is a micro platform that is dedicated to mobile applications.</p>
<h4 class="h4">4) JavaFX</h4>
<p>It is used to develop rich internet applications. It uses a lightweight user interface API.</p>
<h2 class="h2">Prerequisite</h2>
<p>To learn Java, you must have the basic knowledge of C/C++ programming language.</p>
<h2 class="h2">Audience</h2>
<p>Our Java programming tutorial is designed to help beginners and professionals.</p>
<h2 class="h2">Problem</h2>
<p>We assure that you will not find any problem in this Java tutorial. However, if there is any mistake, please post the problem in the contact form.</p>
<br /><br />


<h2> java practise question link</h2>
<h2 class="h4">1) <a href="https://www.javatpoint.com/fibonacci-series-in-java">Fibonacci Series in Java</a></h2>
<h2 class="h4">2) <a href="https://www.javatpoint.com/prime-number-program-in-java">Prime Number Program in Java</a></h2>
<h2 class="h4">3) <a href="https://www.javatpoint.com/palindrome-program-in-java">Palindrome Program in Java</a></h2>
<h2 class="h4">4) <a href="https://www.javatpoint.com/factorial-program-in-java">Factorial Program in Java</a></h2>
<h2 class="h4">5) <a href="https://www.javatpoint.com/armstrong-number-in-java">Armstrong Number in Java</a></h2>
<h2 class="h4">6) <a href="https://www.javatpoint.com/how-to-generate-random-number-in-java">How to Generate Random Number in Java</a></h2>
<h2 class="h4">7) <a href="https://www.javatpoint.com/how-to-print-pattern-in-java">How to Print Pattern in Java</a></h2>
<h2 class="h4">8) <a href="https://www.javatpoint.com/how-to-compare-two-objects-in-java">How to Compare Two Objects in Java</a></h2>
<h2 class="h4">9) <a href="https://www.javatpoint.com/how-to-create-object-in-java">How to Create Object in Java</a></h2>
<h2 class="h4">10) <a href="https://www.javatpoint.com/how-to-print-ascii-value-in-java">How to Print ASCII Value in Java</a></h2>
    </body>
</html>