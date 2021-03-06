ored automatically into the application window.
    */
    property Item statusBar

    // The below documentation was supposed to be written as a grouped property, but qdoc would
    // not render it correctly due to a bug (QTBUG-34206)
    /*!
        \qmlproperty ContentItem ApplicationWindow::contentItem

        This group holds the size constraints of the content item. This is the area between the
        \l ToolBar and the \l StatusBar.
        The \l ApplicationWindow will use this as input when calculating the effective size
        constraints of the actual window.
        It holds these 6 properties for describing the minimum, implicit and maximum sizes:
        \table
            \header \li Grouped property            \li Description
            \row    \li contentItem.minimumWidth    \li The minimum width of the content item.
            \row    \li contentItem.minimumHeight   \li The minimum height of the content item.
            \row    \li contentItem.implicitWidth   \li The implicit width of the content item.
            \row    \li contentItem.implicitHeight  \li The implicit height of the content item.
            \row    \li contentItem.maximumWidth    \li The maximum width of the content item.
            \row    \li contentItem.maximumHeight   \li The maximum height of the content item.
        \endtable
    */
    property alias contentItem : contentArea

    /*! The style Component for the window.
        \sa {Qt Quick Controls Styles QML Types}
    */
    property Component style: Settings.styleComponent(Settings.style, "ApplicationWindowStyle.qml", root)

    /*! \internal */
    property alias __style: styleLoader.item

    /*! \internal */
    property alias __panel: panelLoader.item

    /*! \internal */
    property real __topBottomMargins: __panel.contentArea.y + __panel.statusBarArea.height
    /*! \internal
        There is a similar macro QWINDOWSIZE_MAX in qwindow_p.h that is used to limit the
        range of QWindow::maximum{Width,Height}
        However, in case we have a very big number (> 2^31) conversion will fail, and it will be
        converted to 0, resulting in that we will call setMaximumWidth(0)....
        We therefore need to enforce the limit at a level where we are still operating on
        floating point values.
    */
    readonly property real __qwindowsize_max: (1 << 24) - 1

    /*! \internal */
    property real __width: 0
    Binding {
        target: root
        property: "__width"
        when: (root.minimumWidth <= root.maximumWidth) && !contentArea.__noImplicitWidthGiven
        value: Math.max(Math.min(root.maximumWidth, contentArea.implicitWidth), root.minimumWidth)
    }
    /*! \internal */
    property real __height: 0
    Binding {
        target: root
        property: "__height"
        when: (root.minimumHeight <= root.maximumHeight) && !contentArea.__noImplicitHeightGiven
        value: Math.max(Math.min(root.maximumHeight, contentArea.implicitHeight + __topBottomMargins), root.minimumHeight)
    }
    /* As soon as an application developer writes
         width: 200
       this binding will be broken. This is the reason for this indirection
       via __width (and __height)
    */
    width: __width
    height: __height

    minimumWidth: contentArea.__noMinimumWidthGiven ? 0 : contentArea.minimumWidth
    minimumHeight: contentArea.__noMinimumHeightGiven ? 0 : (contentArea.minimumHeight + __topBottomMargins)

    maximumWidth: Math.min(__qwindowsize_max, contentArea.maximumWidth)
    maximumHeight: Math.min(__qwindowsize_max, contentArea.maximumHeight + __topBottomMargins)

    /*! \internal */
    default property alias data: contentArea.data

    flags: Qt.Window | Qt.WindowFullscreenButtonHint |
        Qt.WindowTitleHint | Qt.WindowSystemMenuHint | Qt.WindowMinMaxButtonsHint |
        Qt.WindowCloseButtonHint | Qt.WindowFullscreenButtonHint
    // QTBUG-35049: Windows is removing features we didn't ask for, even though Qt::CustomizeWindowHint is not set
    // Otherwise Qt.Window | Qt.WindowFullscreenButtonHint would be enough

    Loader {
        id: panelLoader
        anchors.fill: parent
        sourceComponent: __style ? __style.panel : null
        onStatusChanged: if (status === Loader.Error) console.error("Failed to load Style for", root)
        focus: true
        Loader {
            id: styleLoader
            sourceComponent: style
            property var __control: root
            property QtObject styleData: QtObject {
                readonly property bool hasColor: root.color != "#ffffff"
            }
            onStatusChanged: if (status === Loader.Error) console.error("Failed to load Style for", root)
        }

        Binding { target: toolBar; property: "parent"; value: __panel.toolBarArea }
        Binding { target: statusBar; property: "parent"; value: __panel.statusBarArea }

        Binding {
            property: "parent"
            target: menuBar ? menuBar.__contentItem : null
            when: menuBar && !menuBar.__isNative
            value: __panel.menuBarArea
        }
        Binding { target: menuBar; property: "__parentWindow"; value: root }

        Keys.forwardTo: menuBar ? [menuBar.__contentItem, __panel] : []

        ContentItem {
            id: contentArea
            anchors.fill: parent
            parent: __panel.contentArea
        }
    }
}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        