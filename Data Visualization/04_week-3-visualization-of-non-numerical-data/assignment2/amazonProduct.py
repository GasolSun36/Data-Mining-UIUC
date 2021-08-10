import networkx as nx
import matplotlib.pyplot as plt
import pandas as pd
import numpy as np

# Amazon0302数据为有向图数据
G = nx.DiGraph()  # 无多重边有向图
for i in range(0, 200, 1):
    G.add_node(i, weight=1)
G.nodes()

graph = pd.read_table(
        "./Amazon0302.txt",
        header=None,
        sep="\t",
        names=["FromNodeId", "ToNodeId"],
        nrows=500  # 只读取前100多个结点还有其相连的边
    )

graph.drop([0], inplace=True)
g = graph[["FromNodeId", "ToNodeId"]]
G.add_edges_from(tuple(np.array(g, dtype=int)))
G.edges()
nx.draw(G, node_size=40, with_labels=False)
plt.show()