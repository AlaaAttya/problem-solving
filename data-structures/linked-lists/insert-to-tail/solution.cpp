/*
  Insert Node at the end of a linked list
  head pointer input could be NULL as well for empty list
  Node is defined as
  struct Node
  {
     int data;
     struct Node *next;
  }
*/
Node* Insert(Node *head,int data)
{
  // Complete this method
  Node *tail = new Node;
  Node *last = head;
  tail->next = NULL;
  tail->data = data;
  if(last != NULL) {
      while(last->next != NULL) {
          last = last->next;
      }

      last->next = tail;
  } else {
      head = tail;
  }
  return head;
}
