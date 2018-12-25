/*
  Insert Node at the end of a linked list
  head pointer input could be NULL as well for empty list
  Node is defined as
  class Node {
     int data;
     Node next;
  }
*/
Node Insert(Node head,int data) {
// This is a "method-only" submission.
// You only need to complete this method.
  Node tail = new Node();
  Node last = head;
  tail.next = null;
  tail.data = data;
  if(last != null) {
      while(last.next != null) {
          last = last.next;
      }

      last.next = tail;
  } else {
      head = tail;
  }
  return head;
}