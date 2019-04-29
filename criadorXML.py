from xml.dom import minidom
from datetime import datetime
#from SOAPpy import SOAPpy
from SOAPpy import SOAPProxy

xmlDoc = minidom.Document()

spaces =  xmlDoc.createElement('spaces')
xmlDoc.appendChild(spaces)
dateNow = datetime.now()
for i in range(3):
    space = xmlDoc.createElement('space')
    space_id = xmlDoc.createElement('space_id')
    space_id.appendChild(xmlDoc.createTextNode(str(1000001+i)))
    ##
    name = xmlDoc.createElement('name')
    name.appendChild(xmlDoc.createTextNode(str(1+i)))
    ##
    date = xmlDoc.createElement('DateOccupation')
    date.appendChild(xmlDoc.createTextNode(str(dateNow)))
    ##
    space.appendChild(space_id)
    space.appendChild(name)
    space.appendChild(date)
    spaces.appendChild(space)
url = 'http://localhost:8080/img/server.php'
namespace = 'urn:Service'
server = SOAPProxy(url, namespace)
server.config.debug = 1
print(server.getUser())
#print(spaces.toprettyxml())