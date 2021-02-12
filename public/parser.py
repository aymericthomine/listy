#!/usr/bin/env python3

# Import json module
import json

# Define json variable
jsondata = """[
 {
  "name":"Pen",
   "type":"vegan",
  "unit_price":"5"
 },
 {
  "name":"Eraser",
  "unit_price":"15",
  "type":"diet"
 },
 {
  "name":"Pencil",
   "type":"vegan",
  "unit_price":"10"
 },
 {
  "name":"White paper",
   "type":"diet",
  "unit_price":"15"
 }
]"""

# load the json data
items = json.loads(jsondata)

# Input the item name that you want to search
item = input("Enter an item type:\n")
item = input("Enter an item unit_price:\n")
#
#def search_name (name):
 #    for keyname in items:
  #       if name.upper() == keyname['unit_price'].upper():
   #          return keyname['name']
#
#if (search_name(item) != None):
 #     print("The name is:", search_name(item))
#else:
 # print("Item is not found")


# Define a function to search the item
def search_price (type):
 for keyval in items:
  if type.upper() == keyval['type'].upper():
   return keyval['unit_price']
#
def search_unit_price(price):
    for x in items:
        if price == x['unit_price']:
            return x['name']

# Check the return value and print message
if (search_unit_price(item) != None):
    print(("la valeur est : ", search_unit_price(item)))
else:
    exp = keyval
    print(exp)

if (search_price(item) != None):
      print("The price is:", search_price(item))
else:
  print("Item is not found")
