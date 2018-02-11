-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2017 at 09:31 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `questionaire`
--

-- --------------------------------------------------------

--
-- Table structure for table `oops`
--

CREATE TABLE `oops` (
  `qno` int(11) NOT NULL,
  `question` varchar(400) NOT NULL,
  `firstoption` varchar(400) NOT NULL,
  `secondoption` varchar(400) NOT NULL,
  `thirdoption` varchar(400) NOT NULL,
  `fourthoption` varchar(400) NOT NULL,
  `correctoption` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oops`
--

INSERT INTO `oops` (`qno`, `question`, `firstoption`, `secondoption`, `thirdoption`, `fourthoption`, `correctoption`) VALUES
(1, 'Which of the following type of class allows only one object of it to be created?', 'Virtual class', 'Abstract class', 'Singleton class', 'Friend class', 'Singleton class'),
(2, 'Which of the following is not a type of constructor?', 'Copy constructor', 'Friend constructor', 'Default constructor', 'Parameterized constructor', 'Friend constructor'),
(3, 'Which of the following statements is correct?', 'Base class pointer cannot point to derived class.', 'Derived class pointer cannot point to base class.', 'Pointer to derived class cannot be created.', 'Pointer to base class cannot be created.', 'Derived class pointer cannot point to base class.'),
(4, 'Which of the following is not the member of class?', 'Static function', 'Friend function', 'Const function', 'Virtual function', 'Friend function'),
(5, 'Which of the following concepts means determining at runtime what method to invoke?', 'Data hiding', 'Dynamic Typing', 'Dynamic binding', 'Dynamic loading', 'Dynamic binding'),
(6, 'Which of the following term is used for a function defined inside a class?', 'Member Variable', 'Member function', 'Class function', 'Classic function', 'Member function'),
(7, 'Which of the following concept of oops allows compiler to insert arguments in a function call if it is not specified?', 'Call by value', 'Call by reference', 'Default arguments', 'Call by pointer', 'Default arguments'),
(8, 'How many instances of an abstract class can be created?', '1', '5', '13', '0', '0'),
(9, 'Which of the following cannot be friend?', 'Function', 'Class', 'Object', 'Operator function', 'Object'),
(10, 'Which of the following concepts of OOPS means exposing only necessary information to client?', 'Encapsulation', 'Abstraction', 'Data hiding', 'Data binding', 'Data hiding'),
(11, 'cout is a/an __________ .', 'operator', 'function', 'Object', 'macro', 'Object'),
(12, 'Which of the following concepts provides facility of using object of one class inside another class?', 'Encapsulation', 'Abstraction', 'Composition', 'Inheritance', 'Composition'),
(13, 'How many types of polymorphisms are supported by C++?', '1', '2', '3', '4', '2'),
(14, 'Which of the following is an abstract data type?', 'int', 'double', 'string', 'Class', 'Class'),
(15, 'Which of the following concepts means adding new components to a program as it runs?', 'Data hiding', 'Dynamic typing', 'Dynamic binding', 'Dynamic loading', 'Dynamic loading'),
(16, 'Which of the following statement is correct?', 'A constructor is called at the time of declaration of an object.', 'A constructor is called at the time of use of an object.', 'A constructor is called at the time of declaration of a class.', 'A constructor is called at the time of use of a class.', 'A constructor is called at the time of declaration of an object.'),
(17, 'Which of the following correctly describes overloading of functions?', 'Virtual polymorphism', 'Transient polymorphism', 'Ad-hoc polymorphism', 'Pseudo polymorphism', 'Ad-hoc polymorphism'),
(18, 'Which of the following approach is adapted by C++?', 'Top-down', 'Bottom-up', 'Right-left', 'Left-right', 'Bottom-up'),
(19, 'Which of the following is correct about function overloading?', 'The types of arguments are different.', 'The order of argument is different.', 'The number of argument is same.', 'Both A and B.', 'Both A and B.'),
(20, 'Which of the following is correct about class and structure?', 'class can have member functions while structure cannot.', 'class data members are public by default while that of structure are private.', 'Pointer to structure or classes cannot be declared.', 'class data members are private by default while that of structure are public by default.', 'class data members are private by default while that of structure are public by default.'),
(21, 'Which of the following concepts means wrapping up of data and functions together?', 'Abstraction', 'Encapsulation', 'Inheritance', 'Polymorphism', 'Encapsulation'),
(22, 'Which of the following concepts means waiting until runtime to determine which function to call?', 'Data hiding', 'Dynamic casting', 'Dynamic binding', 'Dynamic loading', 'Dynamic binding'),
(23, 'How "Late binding" is implemented in C++?', 'Using C++ tables', 'Using Virtual tables', 'Using Indexed virtual tables', 'Using polymorphic tables', 'Using Virtual tables'),
(24, 'Which of the following operator is overloaded for object cout?', '>>', '<<', '+', '=', '<<'),
(25, 'Which of the following is the correct class of the object cout?', 'iostream', 'istream', 'ostream', 'ifstream', 'ostream'),
(26, 'Which of the following cannot be used with the keyword virtual?', 'class', 'member functions', 'constructor', 'destructor', 'constructor'),
(27, 'Which of the following functions are performed by a constructor?', 'Construct a new class', 'Construct a new object', 'Construct a new function', 'Initialize objects', 'Initialize objects'),
(28, 'Which of the following problem causes an exception?', 'Missing semicolon in statement in main().', 'A problem in calling function.', 'A syntax error.', 'A run-time error.', 'A run-time error.'),
(29, 'Which one of the following options is correct about the statement given below? The compiler checks the type of reference in the object and not the type of object.', 'Inheritance', 'Polymorphism', 'Abstraction', 'Encapsulation', 'Polymorphism'),
(30, 'Which of the following is the correct way of declaring a function as constant?', 'const int ShowData(void) { /* statements */ }', 'int const ShowData(void) { /* statements */ }', 'int ShowData(void) const { /* statements */ }', 'Both A and B', 'int ShowData(void) const { /* statements */ }'),
(31, 'Which of the following concepts is used to implement late binding?', 'Virtual function', 'Operator function', 'Const function', 'Static function', 'Virtual function'),
(32, 'Which of the following statement is correct?', 'C++ allows static type checking', 'C++ allows dynamic type checking.', 'C++ allows static member function be of type const.', 'Both A and B.', 'Both A and B.'),
(33, 'Which of the following factors supports the statement that reusability is a desirable feature of a language?', 'It decreases the testing time.', 'It lowers the maintenance cost.', 'It reduces the compilation time.', 'Both A and B.', 'Both A and B.'),
(34, 'Which of the following ways are legal to access a class data member using this pointer?', 'this->x', 'this.x', '*this.x', '*this-x', 'this->x'),
(35, 'Which of the following is a mechanism of static polymorphism?', 'Operator overloading', 'Function overloading', 'Templates', 'All of the above', 'All of the above'),
(36, 'Which of these is/are correct about the statements given below? I. All operators can be overloaded in C++.  II.We can change the basic meaning of an operator in C++.', 'Only I is true.', 'Both I and II are false.', 'Only II is true.', 'Both I and II are true.', 'Both I and II are false.'),
(37, 'What happens if the base and derived class contains definition of a function with same prototype?', 'Compiler reports an error on compilation.', 'Only base class function will get called irrespective of object.', 'Only derived class function will get called irrespective of object.', 'Base class object will call base class function and derived class object will call derived class function.', 'Base class object will call base class function and derived class object will call derived class function.'),
(38, 'Which of the following are available only in the class hierarchy chain?', 'Public data members', 'Private data members', 'Protected data members', 'Member functions', 'Protected data members'),
(39, 'Which of the following is not a type of inheritance?', 'Multiple', 'Multilevel', 'Distributive', 'Hierarchical', 'Distributive'),
(40, 'Which of the following operators cannot be overloaded?', '[]', '->', '?:', '*', '?:'),
(41, 'In which of the following a virtual call is resolved at the time of compilation?', 'From inside the destructor.', 'From inside the constructor.', 'From inside the main().', 'Both A and B.', 'Both A and B.'),
(42, 'Which of the following statements regarding inline functions is correct?', 'It speeds up execution.', 'It slows down execution', 'It increases the code size.', 'Both A and C.', 'Both A and C.'),
(43, 'Which one of the following is the correct way to declare a pure virtual function?', 'virtual void Display(void){0};', 'virtual void Display = 0;', 'virtual void Display(void) = 0;', 'void Display(void) = 0;', 'virtual void Display(void) = 0;'),
(44, 'Which of the following header file includes definition of cin and cout?', 'istream.h', 'ostream.h', 'iomanip.h', 'iostream.h', 'iostream.h'),
(45, 'Which of the following keyword is used to overload an operator?', 'overload', 'operator', 'friend', 'override', 'operator'),
(46, 'What will happen if a class is not having any name?', 'It cannot have a destructor.', 'It cannot have a constructor.', 'It is not allowed.', 'Both A and B.', 'Both A and B.'),
(47, 'Which inheritance type is used in the class given? class A : public X, public Y  {}', 'Hybrid inheritance', 'Multilevel inheritance', 'Multiple inheritance', 'Hierarchical Inheritance', 'Multiple inheritance'),
(48, 'Which one of the following is/are correct about the statements given ? I.All function calls are resolved at compile-time in Procedure Oriented Programming. II. All function calls are resolved at compile-time in OOPS.', 'Only II is correct.', 'Both I and II are correct.', 'Only I is correct.', 'Both I and II are incorrect', 'Only I is correct.'),
(49, 'Which of the following is an invalid visibility label while inheriting a class?', 'public', 'private', 'protected', 'friend', 'friend'),
(50, 'Which one of the following options is correct?', 'Friend function can access public data members of the class.', 'Friend function can access protected data members of the class', 'Friend function can access private data members of the class.', 'All of the above.', 'All of the above.'),
(51, 'Which of the following statements is correct in C++?', 'Classes cannot have data as protected members.', 'Structures can have functions as members.', 'Class members are public by default.', 'Structure members are private by default.', 'Structures can have functions as members.'),
(52, 'Which of the following is used to make an abstract class?', 'Declaring it abstract using static keyword.', 'Declaring it abstract using virtual keyword.', 'Making at least one member function as virtual function.', 'Making at least one member function as pure virtual function.', 'Making at least one member function as pure virtual function.'),
(53, 'Which of the following access specifier is used as a default in a class definition?', 'protected', 'public', 'private', 'friend', 'private'),
(54, 'What is correct about the static data member of a class?', 'A static member function can access only static data members of a class.', 'A static data member is shared among all the object of the class.', 'A static data member can be accessed directly from main().', 'Both A and B.', 'Both A and B.'),
(55, 'Which of the following provides a reuse mechanism?', 'Abstraction', 'Inheritance', 'Dynamic binding', 'Encapsulation', 'Inheritance'),
(56, 'Which of the following statement is correct?', 'Class is an instance of object.', 'Object is an instance of a class.', 'Class is an instance of data type.', 'Object is an instance of data type', 'Object is an instance of a class');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
