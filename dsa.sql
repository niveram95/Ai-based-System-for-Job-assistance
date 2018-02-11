-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2017 at 10:24 AM
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
-- Table structure for table `dsa`
--

CREATE TABLE `dsa` (
  `qno` int(11) NOT NULL,
  `question` varchar(400) NOT NULL,
  `firstoption` varchar(400) NOT NULL,
  `secondoption` varchar(400) NOT NULL,
  `thirdoption` varchar(400) NOT NULL,
  `fourthoption` varchar(400) NOT NULL,
  `option1` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dsa`
--

INSERT INTO `dsa` (`qno`, `question`, `firstoption`, `secondoption`, `thirdoption`, `fourthoption`, `option1`) VALUES
(1, 'Which if the following is/are the levels of implementation of data structure', 'Abstract level', 'Application level', 'Implementation level', 'All of the above', 'All of the above'),
(2, 'A binary search tree whose left subtree and right subtree differ in hight by at most 1 unit is called ……', 'AVL tree', 'Red­black tree', 'Lemma tree', 'None of the above', 'AVL tree'),
(3, '……………….. level is where the model becomes compatible executable code ', 'Abstract level', 'Application level', 'Implementation level', 'All of the above', 'Implementation level'),
(4, 'Stack is also called as', 'Last in first out', 'First in last out', 'Last in last out', 'First in first out', 'Last in first out'),
(5, ' Which of the following is true about the characteristics of abstract data types? i) It exports a type. ii) It exports a set of operations', 'True, False', 'False, True', 'True, True', 'False, False', 'True, True'),
(6, '…………… is not the component of data structure.', ' Operations', 'Storage Structures', 'Algorithms', 'None of above', 'None of above'),
(7, 'Which of the following is not the part of ADT description?', ' Data', ' Operations', ' Both of the above', ' None of the above', ' None of the above'),
(8, 'Inserting an item into the stack when stack is not full is called …………. Operation and deletion of item form the stack, when stack is not empty is called ………..operation.', 'push, pop', 'pop, push', 'insert, delete', 'insert, delete', 'push, pop'),
(9, '……………. Is a pile in which items are added at one end and removed from the other.', 'Stack', 'Queue', ' List', 'None of the above', 'Queue'),
(10, '. ………… is very useful in situation when data have to stored and then retrieved in reverse order.', 'Stack', 'Queue', 'List', 'Link list', 'Stack'),
(11, 'Which data structure allows deleting data elements from and inserting at rear?', 'Stacks', 'Queues', 'Dequeues', 'Binary search tree', 'Queues'),
(12, 'Which of the following data structure can’t store the non­homogeneous data elements?', 'Arrays', 'Records', 'Pointers', 'Stacks', 'Arrays'),
(13, '. A ……. is a data structure that organizes data similar to a line in the supermarket, where the first one in line is the first one out.', 'Queue linked list', 'Stacks linked list', 'Both of them', 'Neither of them', 'Queue linked list'),
(14, '. Which of the following is non­liner data structure?', 'Stacks', 'List', 'Strings', 'Trees', 'Trees'),
(15, 'Herder node is used as sentinel in …..', 'Graphs', 'Stacks', 'Binary tree', ' Queues', 'Binary tree'),
(16, 'Which data structure is used in breadth first search of a graph to hold nodes?', 'Stack', 'queue', 'Tree', 'Array', 'queue'),
(17, 'Identify the data structure which allows deletions at both ends of the list but insertion at only one end.', 'Input restricted dequeue', 'Output restricted qequeue', 'Priority queues', 'Stack', 'Input restricted dequeue'),
(18, 'Which of the following data structure is non linear type?', 'Strings', 'Lists', ' Stacks', 'Graph', 'Graph'),
(19, 'Which of the following data structure is linear type?', 'Graph', 'Trees', 'Binary tree', 'Stack', 'Stack'),
(20, 'To represent hierarchical relationship between elements, Which data structure is suitable?', 'Dequeue', 'Priority', 'Tree', 'Graph', 'Tree'),
(21, 'A directed graph is ………………. if there is a path from each vertex to every other vertex in the digraph.', 'Weakly connected', 'Strongly Connected', 'Tightly Connected', 'Linearly Connected', 'Strongly Connected'),
(22, 'In the …………….. traversal we process all of a vertex’s descendants before we move to an adjacent vertex', 'Depth First', 'Breadth First', 'Width First', 'Depth Limited', 'Depth First'),
(23, 'State True of False. i) Network is a graph that has weights or costs associated with it. ii) An undirected graph which contains no cycles is called a forest. iii) A graph is said to be complete if there is no edge between every pair of vertices.', 'True, False, True', 'True, True, False', 'True, True, True', 'False, True, True', 'True, True, False'),
(24, 'Match the following. a) Completeness b) Time Complexity c) Space Complexity i) How long does it take to find a solution  ii) How much memory need to perform the search. iii) Is the strategy guaranteed to find the solution when there in one.', 'a­iii, b­ii, c­i', 'a­i, b­ii, c­iii', 'a­iii, b­i, c­ii', 'a­i, b­iii, c­ii', 'a­iii, b­i, c­ii'),
(25, 'The number of comparisons done by sequential search is ………………', '(N/2)+1 ', '(N+1)/2 ', '(N¬1)/2 ', '(N+2)/2', '(N+1)/2 '),
(26, '. In ……………, search start at the beginning of the list and check every element in the list.', 'Linear search', 'Binary search', 'Hash Search', 'Binary Tree search', 'Linear search'),
(27, 'State True or False. i) Binary search is used for searching in a sorted array. ii) The time complexity of binary search is O(logn).', 'True, False', 'False, True', 'False, False', 'True, True', 'True, True'),
(28, 'Which of the following is not the internal sort?', 'Insertion Sort', 'Bubble Sort', 'Merge Sort ', 'Heap Sort', 'Merge Sort '),
(29, 'State True or False. i) An undirected graph which contains no cycles is called forest. ii) A graph is said to be complete if there is an edge between every pair of vertices.', 'True, True', 'False, True', 'False, False', 'True, False', 'True, True'),
(30, 'A graph is said to be ……………… if the vertices can be split into two sets V1 and V2 such there are no edges between two vertices of V1 or two vertices of V2.', 'Partite', 'Bipartite', 'Rooted', 'Bisects', 'Bipartite'),
(31, 'In a queue, the initial values of front pointer f rare pointer r should be …….. and ……….. respectively.', '0 and 1', '0 and ­-1', '-1 and 0', '1 and 0', '0 and ­-1'),
(32, 'In a circular queue the value of r will be ..', 'r=r+1', 'r=(r+1)% [QUEUE_SIZE – 1]', 'r=(r+1)% QUEUE_SIZE', 'r=(r­1)% QUEUE_SIZE', 'r=(r+1)% QUEUE_SIZE'),
(33, 'Which of the following statement is true? i) Using singly linked lists and circular list, it is not possible to traverse the list backwards. ii) To find the predecessor, it is required to traverse the list from the first node in case of singly linked list.', 'i­only', 'ii­only', 'Both i and ii', 'None of both', 'Both i and ii'),
(34, 'The advantage of …………….. is that they solve the problem if sequential storage representation. But disadvantage in that is they are sequential lists.', 'Lists', 'Linked Lists', 'Trees', 'Queues', 'Linked Lists'),
(35, 'What will be the value of top, if there is a size of stack STACK_SIZE is 5', '5', '6', '4', 'None', '4'),
(36, '………… is not the operation that can be performed on queue.', 'Insertion', 'Deletion', 'Retrieval', 'Traversal', 'Traversal'),
(37, 'There is an extra element at the head of the list called a ……….', 'Antinel', 'Sentinel', 'List header', ' List head', 'Sentinel'),
(38, 'A graph is a collection of nodes, called ………. And line segments called arcs or ……….. that connect pair of nodes.', 'vertices, edges', 'edges, vertices', 'vertices, paths', 'graph node, edges', 'vertices, edges'),
(39, 'A ……….. is a graph that has weights of costs', 'Network', 'Weighted graph', 'Both A and B', 'None A and B', 'Both A and B'),
(40, 'In general, the binary search method needs no more than ……………. comparisons.', '[log2n]­1', '[logn]+1', '[log2n]', '[log2n]+1', '[log2n]+1'),
(41, 'Which of the following is not the type of queue?', 'Ordinary queue', 'Single ended queue', 'Circular queue', 'Priority queue', 'Single ended queue'),
(42, '. The property of binary tree is', 'The first subset is called left subtree', 'The second subtree is called', 'The root cannot contain NULL', 'Single ended queue', 'Single ended queue'),
(43, '. State true or false. i) The degree of root node is always zero. ii) Nodes that are not root and not leaf are called as internal nodes.', 'True, True', 'True, False', 'False, True', 'False, False', 'False, True'),
(44, 'Any node is the path from the root to the node is called', 'Successor node', 'Ancestor node', 'Internal node', 'None of the above', 'Ancestor node'),
(45, 'State true of false. i) A node is a parent if it has successor nodes. ii) A node is child node if out degree is one.', 'True, True', 'True, False', 'False, True', 'False, False', 'True, False'),
(46, '………………. is not an operation performed on linear list a) Insertion b) Deletion c) Retrieval d) Traversal', 'only a,b and c', 'only a and b', 'All of the above', 'None of the above', 'None of the above'),
(47, 'Which is/are the application(s) of stack', 'Function calls', 'Large number Arithmetic', 'Evaluation of arithmetic expressions', 'All of the above', 'All of the above'),
(48, 'A …………… is an acyclic digraph, which has only one node with indegree 0, and other nodes have indegree 1.', 'Directed tree', 'Undirected tree', 'Dis­joint tree', 'Direction oriented tree', 'Directed tree'),
(49, '…………………. Is a directed tree in which outdegree of each node is less than or equal to two.', 'Unary tree', 'Binary tree', 'Trinary tree', 'Both B and C', 'Binary tree'),
(50, 'State true or false.i) An empty tree is also a binary tree. ii) In strictly binary tree, the out­degree of every node is either o or 2.', 'True, False', 'False, True', 'True, True', 'False, False', 'True, True'),
(51, 'Which of the following data structures are indexed structures?', 'Linear arrays', 'Linked lists', 'Queue', ' Stack', 'Linear arrays'),
(52, 'Which of the following data structure store the homogeneous data elements?', 'Arrays', 'Records', 'Pointers', 'Lists', 'Records'),
(53, 'When new data are to be inserted into a data structure, but there is not available space&#894; this situation is usually called ….', 'Underflow', 'overflow', 'houseful', 'saturated', 'overflow'),
(54, 'A data structure where elements can be added or removed at either end but not in the middle is called …', 'linked lists', 'stacks', 'queues', 'dequeue', 'dequeue'),
(55, 'Operations on a data structure may be …..', 'creation', 'destruction', 'selection', 'all of the above', 'all of the above'),
(56, 'The way in which the data item or items are logically related defines …..', 'storage structure', 'data structure', 'data relationship', 'data operation', 'data structure'),
(57, 'Which of the following are the operations applicable an primitive data structures?', 'create', 'destroy', 'update', 'all of the above', 'all of the above'),
(58, 'The use of pointers to refer elements of a data structure in which elements are logically adjacent is ….', 'pointers', 'linked allocation', 'stack', 'queue', 'linked allocation'),
(59, 'Arrays are best data structures', 'for relatively permanent collections of data', 'for the size of the structure and the data in the structure are constantly changing', 'for both of above situation', 'for none of above situation', 'for relatively permanent collections of data'),
(60, 'Which of the following statement is false?', 'Arrays are dense lists and static data structure.', 'Data elements in linked list need not be stored in adjacent space in memory', 'Pointers store the next data element of a list.', 'Linked lists are collection of the nodes that contain\r\ninformation part and next pointer.\r\n', 'Pointers store the next data element of a list.'),
(61, 'Which of the following data structure is nonlinear type?', 'Strings', 'Lists', 'Stacks', 'Tree', 'Tree'),
(62, 'Which of the following data structure is linear type?', 'Array', 'Tree', 'Graphs', 'Hierarchy', 'Array'),
(63, 'The logical or mathematical model of a particular organization of data is called a ………', 'Data structure', 'Data arrangement', 'Data configuration', 'Data formation', 'Data structure'),
(64, 'The simplest type of data structure is ………………', 'Multidimensional array', 'Linear array', 'Two dimensional array', 'Three dimensional array', 'Linear array'),
(65, 'Linear arrays are also called ……………….', 'Straight line array', 'One­dimensional array', 'Vertical array', 'Horizontal array', 'One­dimensional array'),
(66, 'Arrays are best data structures …………', 'For relatively permanent collections of data.', 'For the size of the structure and the data in the structure are constantly changing', 'For both of above situation', 'For none of the above', 'For relatively permanent collections of data.'),
(67, 'Which of the following data structures are indexed structures?', 'Linear arrays', 'Linked lists', 'Graphs', 'Trees', 'Linear arrays'),
(68, 'Each node in a linked list has two pairs of ………….. and ……………….', 'Link field and information field', 'Link field and avail field', 'Avail field and information field', 'Address field and link field', 'Link field and information field'),
(69, 'A …………………… does not keep track of address of every element in the list.', 'Stack', 'String', 'Linear array', 'Queue', 'Linear array'),
(70, 'When does top value of the stack changes?', 'Before deletion', 'While checking underflow', 'At the time of deletion', 'After deletion', 'After deletion'),
(71, 'Which of the following data structure is nonlinear type?', 'Strings', 'Lists', 'Stacks', 'Tree', 'Tree'),
(72, 'Which of the following data structure is linear type?', 'Array', 'Tree', 'Graphs', 'Hierarchy', 'Array'),
(73, 'The logical or mathematical model of a particular organization of data is called a ………', 'Data structure', 'Data arrangement', 'Data configuration', 'Data formation', 'Data structure'),
(74, 'The simplest type of data structure is ………………', 'Multidimensional array', 'Linear array', 'Two dimensional array', 'Three dimensional array', 'Linear array'),
(75, 'Linear arrays are also called ……………….', 'Straight line array', 'One­dimensional array', 'Vertical array', 'Horizontal array', 'One­dimensional array'),
(76, 'The disadvantage in using a circular linked list is …………………….', 'It is possible to get into infinite loop.', 'Last node points to first node.', 'Time consuming', 'Requires more memory space', 'It is possible to get into infinite loop.'),
(77, 'A linear list in which each node has pointers to point to the predecessor and successors nodes is called as ..', 'Singly Linked List', 'Circular Linked List', 'Doubly Linked List', 'Linear Linked List', 'Doubly Linked List'),
(78, 'In a priority queue, insertion and deletion takes place at ………………', 'front, rear end', 'only at rear end', 'only at front end', 'any position', 'any position'),
(79, 'Th worst case time complexity of quick sort is …………..', 'O(n)', 'O(n^2)', 'O(n log n)', 'O(log n)', 'O(n^2)'),
(80, 'Which of the following is an application of stack?', 'finding factorial', 'tower of Hanoi', 'infix to postfix conversion', 'All of the above.', 'All of the above.'),
(81, 'The data structure which is one ended is ………………', 'Stack', 'Queue', 'Tree', 'Graph', 'Stack'),
(82, 'A list which displays the relationship of adjacency between elements is said to be', 'Linear', 'Non linear', 'Linked List', 'Trees', 'Linear');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
