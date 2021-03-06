USE [hpmho]
GO
/****** Object:  Table [dbo].[txreturnfrompdi]    Script Date: 08/22/2016 08:43:48 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[txreturnfrompdi](
	[RowId] [int] NOT NULL,
	[Model] [varchar](255) NOT NULL,
	[FrmNo] [varchar](255) NOT NULL,
	[Kode] [varchar](255) NOT NULL,
	[Keterangan] [varchar](255) NOT NULL,
	[Colour] [varchar](255) NOT NULL,
	[Problem] [varchar](255) NOT NULL,
	[JenisKerusakan] [varchar](255) NOT NULL,
	[Image] [text] NOT NULL,
	[Remark] [varchar](255) NOT NULL,
	[NrkVq] [varchar](255) NOT NULL,
	[NrkDelivery] [varchar](255) NOT NULL,
	[InspectionDate] [datetime] NOT NULL,
 CONSTRAINT [PK_txreturnfrompdi] PRIMARY KEY CLUSTERED 
(
	[RowId] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
INSERT [dbo].[txreturnfrompdi] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Problem], [JenisKerusakan], [Image], [Remark], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (1, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'FACE, RR Bumper Point 1', N'baret', N'image01.jpg', N'accident delivery', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txreturnfrompdi] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Problem], [JenisKerusakan], [Image], [Remark], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (2, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'Rallye Red', N'Face, FR. Bumper Point 3', N'baret', N'image02.jpg', N'-', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txreturnfrompdi] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Problem], [JenisKerusakan], [Image], [Remark], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (3, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'FACE, RR Bumper Point 1', N'baret', N'img1.jpg', N'accident delivery', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txreturnfrompdi] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Problem], [JenisKerusakan], [Image], [Remark], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (4, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'FACE, RR Bumper Point 1', N'baret', N'img1.jpg', N'-', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txreturnfrompdi] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Problem], [JenisKerusakan], [Image], [Remark], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (5, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'Modern Steel Metallic', N'FACE, RR Bumper Point 1', N'gompal', N'img1.jpg', N'accident delivery', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txreturnfrompdi] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Problem], [JenisKerusakan], [Image], [Remark], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (6, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'FACE, RR Bumper Point 1', N'baret', N'img1.jpg', N'-', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txreturnfrompdi] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Problem], [JenisKerusakan], [Image], [Remark], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (7, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'FACE, RR Bumper Point 1', N'baret', N'img1.jpg', N'accident delivery', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txreturnfrompdi] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Problem], [JenisKerusakan], [Image], [Remark], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (8, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'FACE, RR Bumper Point 1', N'baret', N'img1.jpg', N'accident delivery', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txreturnfrompdi] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Problem], [JenisKerusakan], [Image], [Remark], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (9, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'FACE, RR Bumper Point 1', N'baret', N'img1.jpg', N'-', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txreturnfrompdi] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Problem], [JenisKerusakan], [Image], [Remark], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (10, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'FACE, RR Bumper Point 1', N'baret', N'img1.jpg', N'-', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txreturnfrompdi] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Problem], [JenisKerusakan], [Image], [Remark], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (11, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'FACE, RR Bumper Point 1', N'baret', N'img1.jpg', N'accident delivery', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txreturnfrompdi] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Problem], [JenisKerusakan], [Image], [Remark], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (12, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'FACE, RR Bumper Point 1', N'baret', N'img1.jpg', N'accident delivery', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
/****** Object:  Table [dbo].[txpdireturnfromvq]    Script Date: 08/22/2016 08:43:48 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[txpdireturnfromvq](
	[RowId] [int] NOT NULL,
	[Model] [varchar](255) NOT NULL,
	[FrmNo] [varchar](255) NOT NULL,
	[Kode] [varchar](255) NOT NULL,
	[Keterangan] [varchar](255) NOT NULL,
	[Colour] [varchar](255) NOT NULL,
	[Problem] [varchar](255) NOT NULL,
	[JenisKerusakan] [varchar](255) NOT NULL,
	[Image] [text] NOT NULL,
	[Remark] [varchar](255) NOT NULL,
	[NrkVq] [varchar](255) NOT NULL,
	[NrkDelivery] [varchar](255) NOT NULL,
	[InspectionDate] [datetime] NOT NULL,
 CONSTRAINT [PK_txpdireturnfromvq] PRIMARY KEY CLUSTERED 
(
	[RowId] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
INSERT [dbo].[txpdireturnfromvq] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Problem], [JenisKerusakan], [Image], [Remark], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (1, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'FACE, RR Bumper Point 1', N'baret', N'image01.jpg', N'accident delivery', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txpdireturnfromvq] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Problem], [JenisKerusakan], [Image], [Remark], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (2, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'Rallye Red', N'Face, FR. Bumper Point 3', N'baret', N'image02.jpg', N'-', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txpdireturnfromvq] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Problem], [JenisKerusakan], [Image], [Remark], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (3, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'FACE, RR Bumper Point 1', N'baret', N'img1.jpg', N'accident delivery', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txpdireturnfromvq] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Problem], [JenisKerusakan], [Image], [Remark], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (4, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'FACE, RR Bumper Point 1', N'baret', N'img1.jpg', N'-', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txpdireturnfromvq] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Problem], [JenisKerusakan], [Image], [Remark], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (5, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'Modern Steel Metallic', N'FACE, RR Bumper Point 1', N'gompal', N'img1.jpg', N'accident delivery', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txpdireturnfromvq] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Problem], [JenisKerusakan], [Image], [Remark], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (6, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'FACE, RR Bumper Point 1', N'baret', N'img1.jpg', N'-', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txpdireturnfromvq] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Problem], [JenisKerusakan], [Image], [Remark], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (7, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'FACE, RR Bumper Point 1', N'baret', N'img1.jpg', N'accident delivery', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txpdireturnfromvq] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Problem], [JenisKerusakan], [Image], [Remark], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (8, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'FACE, RR Bumper Point 1', N'baret', N'img1.jpg', N'accident delivery', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txpdireturnfromvq] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Problem], [JenisKerusakan], [Image], [Remark], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (9, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'FACE, RR Bumper Point 1', N'baret', N'img1.jpg', N'-', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txpdireturnfromvq] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Problem], [JenisKerusakan], [Image], [Remark], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (10, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'FACE, RR Bumper Point 1', N'baret', N'img1.jpg', N'-', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txpdireturnfromvq] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Problem], [JenisKerusakan], [Image], [Remark], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (11, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'FACE, RR Bumper Point 1', N'baret', N'img1.jpg', N'accident delivery', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txpdireturnfromvq] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Problem], [JenisKerusakan], [Image], [Remark], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (12, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'FACE, RR Bumper Point 1', N'baret', N'img1.jpg', N'accident delivery', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txpdireturnfromvq] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Problem], [JenisKerusakan], [Image], [Remark], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (13, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'FACE, RR Bumper Point 1', N'baret', N'img1.jpg', N'accident delivery', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
/****** Object:  Table [dbo].[txpdarepairqueue]    Script Date: 08/22/2016 08:43:48 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[txpdarepairqueue](
	[RowId] [int] NOT NULL,
	[FrmNo] [varchar](255) NOT NULL,
	[VehicleNo] [varchar](255) NOT NULL,
	[Colour] [varchar](255) NOT NULL,
	[Model] [varchar](255) NOT NULL,
	[Type] [varchar](255) NOT NULL,
	[HandoverPdiToVq] [datetime] NOT NULL,
	[NrkPdi] [varchar](255) NOT NULL,
	[NrkVq] [varchar](255) NOT NULL,
	[History] [varchar](255) NOT NULL,
	[Problem] [varchar](255) NOT NULL,
	[Status] [varchar](255) NOT NULL,
 CONSTRAINT [PK_txpdarepairqueue] PRIMARY KEY CLUSTERED 
(
	[RowId] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
INSERT [dbo].[txpdarepairqueue] ([RowId], [FrmNo], [VehicleNo], [Colour], [Model], [Type], [HandoverPdiToVq], [NrkPdi], [NrkVq], [History], [Problem], [Status]) VALUES (1, N'MHRDD1750GJ705930', N'L12B31814673 ', N'RALLYE RED', N'BRIO SATYA DD1 1.2 E', N'BRIO      ', CAST(0x0000A65C00E2AA90 AS DateTime), N'K 13333', N'K 11111', N'SPIOLER TAIL GATE', N'* Gores', N'NG')
INSERT [dbo].[txpdarepairqueue] ([RowId], [FrmNo], [VehicleNo], [Colour], [Model], [Type], [HandoverPdiToVq], [NrkPdi], [NrkVq], [History], [Problem], [Status]) VALUES (2, N'MHRDD1750GJ705978', N'L12B31814597 ', N'TAFFETA WHITE', N'BRIO SATYA DD1 1.2 E', N'BRIO      ', CAST(0x0000A65C00D0947C AS DateTime), N'K 13333', N'K 11111', N'SIDE PANEL R POINT 10', N'* Cat melepuh / Cat bangun', N'NG')
INSERT [dbo].[txpdarepairqueue] ([RowId], [FrmNo], [VehicleNo], [Colour], [Model], [Type], [HandoverPdiToVq], [NrkPdi], [NrkVq], [History], [Problem], [Status]) VALUES (3, N'MHRDD4770GJ603431', N'L15Z12424876 ', N'LUNAR SILVER METALLIC', N'HONDA MOBILIO DD4 1.', N'MOBILIO   ', CAST(0x0000A65000BFA108 AS DateTime), N'K 13333', N'K 11111', N'SIDE PANEL L POINT 1', N'* Meruntus', N'NG')
INSERT [dbo].[txpdarepairqueue] ([RowId], [FrmNo], [VehicleNo], [Colour], [Model], [Type], [HandoverPdiToVq], [NrkPdi], [NrkVq], [History], [Problem], [Status]) VALUES (4, N'MHRDD4850GJ604959', N'L15Z12425090 ', N'CRYSTAL BLACK PEARL', N'HONDA MOBILIO DD4 1.', N'MOBILIO   ', CAST(0x0000A651009E0D54 AS DateTime), N'K 13333', N'K 11111', N'SIDE PANEL L POINT 1', N'* Meruntus', N'NG')
INSERT [dbo].[txpdarepairqueue] ([RowId], [FrmNo], [VehicleNo], [Colour], [Model], [Type], [HandoverPdiToVq], [NrkPdi], [NrkVq], [History], [Problem], [Status]) VALUES (5, N'MHRDD4870GJ654296', N'L15Z12424610 ', N'WHITE ORCHID PEARL', N'HONDA MOBILIO DD4 1.', N'MOBILIO   ', CAST(0x0000A64901499A84 AS DateTime), N'K 13333', N'K 11111', N'SIDE PANEL L POINT 1', N'* Meruntus', N'NG')
INSERT [dbo].[txpdarepairqueue] ([RowId], [FrmNo], [VehicleNo], [Colour], [Model], [Type], [HandoverPdiToVq], [NrkPdi], [NrkVq], [History], [Problem], [Status]) VALUES (6, N'MHRRU1850GJ608908', N'L15Z61112169 ', N'CRYSTAL BLACK PEARL', N'HONDA HR-V RU1 1.5 E', N'HR-V      ', CAST(0x0000A65C00D936A4 AS DateTime), N'K 13333', N'K 11111', N'SIDE PANEL L POINT 1', N'* Bintik / DUP ( Dirt Under Paint )', N'NG')
/****** Object:  Table [dbo].[txhandovertodel]    Script Date: 08/22/2016 08:43:48 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[txhandovertodel](
	[RowId] [int] NOT NULL,
	[Model] [varchar](255) NOT NULL,
	[FrmNo] [varchar](255) NOT NULL,
	[Kode] [varchar](255) NOT NULL,
	[Keterangan] [varchar](255) NOT NULL,
	[Colour] [varchar](255) NOT NULL,
	[Repair] [varchar](255) NOT NULL,
	[Status] [varchar](255) NOT NULL,
	[NrkVq] [varchar](255) NOT NULL,
	[NrkDelivery] [varchar](255) NOT NULL,
	[InspectionDate] [datetime] NOT NULL,
 CONSTRAINT [PK_txhandovertodel] PRIMARY KEY CLUSTERED 
(
	[RowId] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
INSERT [dbo].[txhandovertodel] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Repair], [Status], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (1, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'YES', N'1', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txhandovertodel] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Repair], [Status], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (2, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'MAGENTA', N'YES', N'0', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txhandovertodel] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Repair], [Status], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (3, N'Mobilio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'YES', N'1', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txhandovertodel] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Repair], [Status], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (4, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'YES', N'1', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txhandovertodel] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Repair], [Status], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (5, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'YES', N'0', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
/****** Object:  Table [dbo].[txdelhandoverfromvq]    Script Date: 08/22/2016 08:43:48 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[txdelhandoverfromvq](
	[RowId] [int] NOT NULL,
	[Model] [varchar](255) NOT NULL,
	[FrmNo] [varchar](255) NOT NULL,
	[Kode] [varchar](255) NOT NULL,
	[Keterangan] [varchar](255) NOT NULL,
	[Colour] [varchar](255) NOT NULL,
	[Repair] [varchar](255) NOT NULL,
	[Status] [varchar](255) NOT NULL,
	[NrkVq] [varchar](255) NOT NULL,
	[NrkDelivery] [varchar](255) NOT NULL,
	[InspectionDate] [datetime] NOT NULL,
 CONSTRAINT [PK_txdelhandoverfromvq] PRIMARY KEY CLUSTERED 
(
	[RowId] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
INSERT [dbo].[txdelhandoverfromvq] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Repair], [Status], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (1, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'1', N'OK', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txdelhandoverfromvq] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Repair], [Status], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (2, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'MAGENTA', N'0', N'OK', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txdelhandoverfromvq] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Repair], [Status], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (3, N'Mobilio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'1', N'OK', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txdelhandoverfromvq] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Repair], [Status], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (4, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'1', N'BELUM HANDOVER', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
INSERT [dbo].[txdelhandoverfromvq] ([RowId], [Model], [FrmNo], [Kode], [Keterangan], [Colour], [Repair], [Status], [NrkVq], [NrkDelivery], [InspectionDate]) VALUES (5, N'Brio', N'MHRDD1750GJ704558', N'DD1T', N'BRIO SATYA 1.2 E MT CKD', N'TAFFETA WHITE', N'1', N'OK', N'K 11111', N'K 12222', CAST(0x0000A65D009450C0 AS DateTime))
