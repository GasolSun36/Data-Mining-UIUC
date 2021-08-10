import pandas as pd
import matplotlib.pyplot as plt
from matplotlib.pyplot import MultipleLocator

# 数据集是ExcelFormattedGISTEMPDataCSV.csv
def getTems(file_path):
    tems = pd.read_table(
        file_path,
        header=None,
        sep=",",
        names=["Year", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep",
               "Oct", "Nov", "Dec", "J-D", "D-N", "DJF", "MAM", "JJA", "SON"],
    )

    years = tems["Year"]
    temps = tems["J-D"]
    years.drop([0], inplace=True)
    years.drop([len(years)], inplace=True)
    temps.drop([0], inplace=True)
    temps.drop([len(temps)], inplace=True)
    years = list(map(int, years))
    temps = list(map(int, temps))
    for i, v in enumerate(temps): temps[i] = v + 47

    fig = plt.figure(dpi=128, figsize=(8, 5))
    plt.plot(
        years,
        temps,
        linewidth=1,
        color="r",
        marker="o",
        markerfacecolor="blue",
        markersize=3,
    )
    x_major_locator = MultipleLocator(15)
    # 把x轴的刻度间隔设置为15，并存在变量里
    y_major_locator = MultipleLocator(10)
    # 把y轴的刻度间隔设置为10，并存在变量里
    ax = plt.gca()
    # ax为两条坐标轴的实例
    ax.xaxis.set_major_locator(x_major_locator)
    # 把x轴的主刻度设置为15的倍数
    ax.yaxis.set_major_locator(y_major_locator)
    # 把y轴的主刻度设置为10的倍数
    plt.xlim(1880, 2015)
    # 把x轴的刻度范围设置为1880到2015
    plt.ylim(0, 130)
    # 把y轴的刻度范围设置为0到130
    plt.xlabel("Years")
    plt.ylabel("Temperature((C+47)*100)")
    plt.title("Average Temperature Between 1880 and 2014")
    plt.tick_params(axis='both', which='major', labelsize=6)
    fig.autofmt_xdate()
    plt.show()

if __name__ == "__main__":
    getTems("./ExcelFormattedGISTEMPDataCSV.csv")
